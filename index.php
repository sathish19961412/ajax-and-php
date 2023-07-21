<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php and Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <section>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex justify-content-center mt-5">
                <h3>Jquery Ajax With Crud Php & Mysql Operation</h3>
              </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-center mt-5">
                    <p><a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Record</a></p>
                </div>
                <!-- Add Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="d-flex justify-content-center">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">User Details</h1>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="frm">
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="mb-3 form-group">
                              <select name="gender" id="gender" required class="form-control">
                                    <option value=''>Select</option>
                                    <option value='Male'>Male</option>
                                    <option value='Female'>Female</option>
                                    <option value='Others'>others</option>
                              </select>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                <input type="text" class="form-control" name="contact" id="contact" placeholder="Name">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </secion>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>