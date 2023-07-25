<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark">
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="/">Products</a>
              </li>
             
            </ul>
          
          </nav>
          <div class ="container">
     <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action ="/products/store">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name ="name" class ="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name ="description"  rows ="4"class ="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                                <select name="role" id="role"  class ="form-control">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="visitor">Visitor</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
     </div>
    </div>
    
</body>
</html>