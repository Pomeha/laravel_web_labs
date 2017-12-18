@extends('main')

@section('title', '| Проверка домена')

@section('content')
 <div class="blokkok">
     <div class="alert alert-danger print-error-msg" style="display:none">

         <ul></ul>

     </div>
     <form>
         <label for="name">Введите домен</label>
         <input type="text" name="name" placeholder="Домен"/>
         <button class="btn btn-success">Проверить</button>
     </form>
 </div>
 <script src="http://code.jquery.com/jquery-latest.min.js"
         type="text/javascript"></script>
<script type="text/javascript">
    $('.btn-success').click(function (e){
       e.preventDefault();

       var domen = $("input[name='name']").val;

       $ajax({
           url: "/domensview",
           type:'POST',
           data: {domen:domen},
           success: function(data){
               if($.isEmptyObject(data.error)){
                   printMessage(data.success);
               }else{
                   printMessage(data.error);
               }
           }
       });
    });
    function printMessage(msg) {
        $(".print-error-msg").find("ul").html('');

        $(".print-error-msg").css('display','block');

        $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

        });
    };
</script>
@endsection