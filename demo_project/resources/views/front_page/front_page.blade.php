<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple data send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <form action="">
        <section>
          <div class="panel panel-header">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="customer_name" class="form-control" placeholder="Please enter your name">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="customer_address" class="form-control" placeholder="Please enter your Address">
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-footer">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Band</th>
                  <th>Quantity</th>
                  <th>Budget</th>
                  <th>Amount</th>
                  <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" name="product_name[]" class="form-control" required=""></td>
                  <td><input type="text" name="brand[]" class="form-control"></td>    
                  <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
                  <td><input type="text" name="budget[]" class="form-control budget"></td>
                  <td><input type="text" name="amount[]" class="form-control amount"></td>
                  <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td style="border: none"></td>
                  <td style="border: none"></td>
                  <td style="border: none"></td>
                  <td>Total</td>
                  <td><b class="total"></b></td>
                  <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </section>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    $('.addRow').on('click', function(){
      addRow();
    })
    function addRow()
    {
      var tr = '<tr>' + 
                  '<td><input type="text" name="product_name[]" class="form-control" required=""></td>'+
                  '<td><input type="text" name="brand[]" class="form-control"></td>'+
                  '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+
                  '<td><input type="text" name="budget[]" class="form-control budget"></td>'+
                  '<td><input type="text" name="amount[]" class="form-control amount"></td>'+
                  '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
                '</tr>';
                $('tbody').append(tr);
    }
    $('.remove').live('click', function(){
      var last=$('tbody tr').length;
      if (last === 1) {
        alert('You can not remove last row');
      } else {
        $(this).parent().parent().remove();
      }
    })
  </script>
</body>
</html>