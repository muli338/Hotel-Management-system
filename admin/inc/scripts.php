<script src="https://ajax.com.googleapis.com/ajax/libs/jquery/5.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function alert(type,msg){
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = '
        <div class="alert ${bs_class} alert-warning alert-dismissible fade show custom-alert" role="alert">
      <strong class="me-3">${msg}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    document.body.append(element);
    }
</script>