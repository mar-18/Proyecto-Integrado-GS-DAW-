$(window).ready(function(){
    $('input[type="file"]').change(function(ev){
      ev.preventDefault();
      var file=ev.target.files[0];
      var imgMini=document.getElementById('imgMini');
      imgMini.src=window.URL.createObjectURL(file);
      console.log(file);
    })
  })