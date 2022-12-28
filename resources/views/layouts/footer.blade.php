<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
  integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
  integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<script type="text/javascript">
  function confirmDelete(url){
        event.preventDefault();
        $('#deletemodal').modal('show');
        $('#confirmdelete').val(url);
      }

      $('#confirmdelete').click(function(){
        var url = $(this).val();
        document.location.href=url;  
      });  
      $(function()
         {
           $('.selectpicker').selectpicker()
          });
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});       
</script>

</div>
</div>

</body>

</html>