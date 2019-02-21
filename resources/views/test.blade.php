<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>

</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form role="form" action="" method="post">
    {{ csrf_field() }}
      <div class="">
          <div class="col-md-12">
              <table class="table table-hover">
                  <tr>
                      <td><label class="control-label">Name*</label></td>
                      <td> <input id="name" type="text" required="required" class="form-control" maxlength="50px" placeholder="Employee Name" />
                      </td>
                  </tr>
              </table>
              <button class="btn btn-primary btn-md pull-left" onclick="save_employee_info()" type="button"><i class="fa fa-plus-circle"></i> Submit</button>
          </div>
      </div>
  </form>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
     function save_employee_info()
     {
         
         if($("#name").val()=="")
         {
             alert("Please Provide the Name of the Employee");
             return;
         }
          value={
               employeename: $("#name").val(),
         };

         $.ajax({
             data: {
               data: value
             },
             url: '/test',
             type: 'POST',
             beforeSend: function(request) {
                 return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
             },
             success: function(response) {
               console.log('success');

             }
         });
      }
</script>
</body>
</html>