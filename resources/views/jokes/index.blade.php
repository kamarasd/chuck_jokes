<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br />
       @if(!empty($success)) <div class="alert alert-success" align="center">{{$success}}</div>
       @elseif(!empty($error)) <div class="alert alert-danger" align="center">{{$error}}</div> @endif
    </div>
</body>
</html>