
  $(document).ready(function() {
    
    load_data();
    function load_data(){
      // var datas = @json($data);
      var datas =  JSON.parse('{{ json_encode($data) }}');
      $.ajax({
        // url:"{{ env('APP_URL', 'forge') }}/cart/list",
        // method:"POST",
        data: datas,
        success:function(data){
          $('#show').html(data);
        }
      });
    }




  });