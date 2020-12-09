$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});


$(document).ready(function () {

    $('#update-button').on('click', function () {

        let id = $(this).attr('data-id');
        let code = $('#codeInput' + id).val();

     req =  $.ajax({
            url: '/update',
            type: 'POST',
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
            data: {code: code, id: id}
        });

       $('#memberSection').fadeOut(500).fadeIn(500);

     //  if success we can do something
     //   req.done(function () {
     //      alert('done');
     //   });
    });





    let files; // переменная. будет содержать данные файлов

// заполняем переменную данными, при изменении значения поля file
    $('#upload-img[type=file]').on('change', function(){
        files = this.files;
    });




    // обработка и отправка AJAX запроса при клике на кнопку upload_files
    $('.upload_files').on( 'click', function( event ){

        event.stopPropagation(); // остановка всех текущих JS событий
        event.preventDefault();  // остановка дефолтного события для текущего элемента - клик для <a> тега



        // ничего не делаем если files пустой
        if( typeof files == 'undefined' ) return;


        // создадим объект данных формы
        let data = new FormData();

        // заполняем объект данных файлами в подходящем для отправки формате
        $.each( files, function( key, value ){
            data.append( key, value );
        });

        // добавим переменную для идентификации запроса
        data.append( 'my_file_upload', 1 );

        // AJAX запрос
        $.ajax({
            url         : '/users/upload',
            type        : 'POST', // важно!
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data        : data,
            cache       : false,
            dataType    : 'json',
            // отключаем обработку передаваемых данных, пусть передаются как есть
            processData : false,
            // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
            contentType : false,
            // функция успешного ответа сервера
            success     : function( respond, status, jqXHR ){

                // ОК - файлы загружены
                if( typeof respond.error === 'undefined' ){
                    // выведем пути загруженных файлов в блок '.ajax-reply'
                    let files_path = respond.files;
                    let html = '';
                    $.each(files_path, function( key, val ){
                        html += val +'<br>';
                    } );

                    $('.ajax-reply').html( html);
                }
                // ошибка
                else {
                    console.log('ОШИБКА: ' + respond.data );
                }
            },
            // функция ошибки ответа сервера
            error: function( jqXHR, status, errorThrown ){
                console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
            }
        });
    });


// other example


    $('#upload').on('click', function() {
        // присвоение переменной файла
        let file_data = $('#sortpicture').prop('files')[0];

       // создадим объект данных формы
        let form_data = new FormData();
        //добавим в форму файл изображения
        form_data.append('image', file_data);
        //добавим в форму идентификатор
        form_data.append('number', '1');

          $.ajax({
              url: '/users/upload',
              type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              success: function (data) {
                  //change the users image after upload
                 $('#avatar').attr('src', '/images/users/'+ data.imageName);
              },
          });
    });



















});




