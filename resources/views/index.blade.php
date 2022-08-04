<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD App with Laravel & Ajax</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>
{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="accordion accordion-flush m-3" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Personal Details
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <!-- personal details -->
                <div class="modal-body p-4 bg-light">
                  <div class="row">
                    <div class="col-lg">
                      <label for="fullname">Full Name</label>
                      <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-lg">
                      <label for="department">Department</label>
                      <input type="text" name="department" class="form-control" placeholder="Department" required>
                    </div>
                  </div>
                  <div class="my-2">
                    <label for="position">Position</label>
                    <input type="text" name="position" class="form-control" placeholder="Position">
                  </div>
                  <div class="my-2">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                  </div>
                  <div class="my-2">
                    <label for="avatar">Select Avatar</label>
                    <input type="file" name="avatar" class="form-control" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Computer Details
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <div class="modal-body p-4 bg-light">
                <div class="row">
                  <div class="col-lg">
                    <label for="category">Type</label>
                    <select class="form-select" name="category" aria-label="Default select example">
                      <option selected>Select Type</option>
                      <option value="Laptop">Laptop</option>
                      <option value="Desktop">Desktop</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <label for="make">Brand</label>
                    <select class="form-select" name="make" aria-label="Default select example">
                      <option selected>Select Brand</option>
                      <option value="Acer">Acer</option>
                      <option value="Asus">Asus</option>
                      <option value="HP">HP</option>
                      <option value="Dell">Dell</option>
                      <option value="Lenovo">Lenovo</option>
                      <option value="Sony">Sony</option>
                      <option value="Toshiba">Toshiba</option>
                      <option value="Compaq">Compaq</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="form-control" placeholder="Model">
                  </div>
                  <div class="col-lg">
                    <label for="serial">Serial</label>
                    <input type="text" name="serial" class="form-control" placeholder="Serial">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg">
                      <label for="date_acquired">Date Acquired</label>
                      <input type="date" name="date_acquired" class="form-control" placeholder="Date Acquired">
                  </div>
                  <div class="col-lg">
                    <label for="os">OS</label>
                    <select class="form-select" name="os" aria-label="Default select example">
                      <option selected>Select OS</option>
                      <option value="Windows XP">Windows XP</option>
                      <option value="Windows 7">Windows 7</option>
                      <option value="Windows 8">Windows 8</option>
                      <option value="Windows 10">Windows 10</option>
                      <option value="Windows 11">Windows 11</option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                CPU Details
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <div class="modal-body p-4 bg-light">
              <label for="ram">Processor Details:</label>
                <div class="row">
                    <div class="col-lg">
                      <input type="text" name="processor" class="form-control" placeholder="Processor">
                    </div>
                    <div class="col-lg">
                      <input type="number" name="proc_speed" class="form-control" placeholder="Speed(GHz)">
                    </div>
                </div>
                <hr>
                <label for="ram">RAM Details:</label>
                <div class="row">
                  <div class="col-lg">
                    <select class="form-select" name="ram_type" aria-label="Default select example">
                        <option selected>Select Type</option>
                        <option value="DDR2">DDR2</option>
                        <option value="DDR3">DDR3</option>
                        <option value="DDR4">DDR4</option>
                        <option value="DDR5">DDR5</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <input type="number" name="ram_slots" class="form-control" placeholder="Ram Slots">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg pt-2">
                    <input type="number" name="ram_capacity" class="form-control" placeholder="Ram Capacity(GB)">
                  </div>
                  <div class="col-lg pt-2">
                    <input type="number" name="ram_mhz" class="form-control" placeholder="Ram Speed(MHz)">
                  </div>
                </div>
                <hr>
                <label for="drive">Hard Drive Details:</label>
                <div class="row">
                  <div class="col-lg">
                  <select class="form-select" name="drve_type" aria-label="Default select example">
                      <option selected>Select Type</option>
                      <option value="HDD">HDD</option>
                      <option value="SSD">SSD</option>
                  </select>
                  </div>
                  <div class="col-lg">
                    <input type="number" name="drve_capacity" class="form-control" placeholder="Drive Capacity(GB)">
                  </div>
                </div> 
              </div>
            </div>
            </div>
          </div>
        </div>
        
        <div class="m-3">
          <hr>
          <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
          <textarea class="form-control" name="remarks" rows="3"></textarea>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Add Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        

        <div class="accordion accordion-flush m-3" id="accordionFlushExample2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                Personal Details
              </button>
            </h2>
            <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne2" data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <!-- personal details -->
                <div class="modal-body p-4 bg-light">
                  <div class="row">
                    <div class="col-lg">
                      <label for="fullname">Full Name</label>
                      <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-lg">
                      <label for="department">Department</label>
                      <input type="text" name="department" id="department" class="form-control" placeholder="Department" required>
                    </div>
                  </div>
                  <div class="my-2">
                    <label for="position">Position</label>
                    <input type="text" name="position" id="position" class="form-control" placeholder="Position">
                  </div>
                  <div class="my-2">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                  </div>
                  <div class="my-2">
                    <label for="avatar">Select Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                  </div>
                  <div class="mt-2" id="avatar">
                    <h1></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                Computer Details
              </button>
            </h2>
            <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
              <div class="modal-body p-4 bg-light">
                <div class="row">
                  <div class="col-lg">
                    <label for="category">Type</label>
                    <select class="form-select" name="category" id="category" aria-label="Default select example">
                      <option selected>Select Type</option>
                      <option value="Laptop">Laptop</option>
                      <option value="Desktop">Desktop</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <label for="make">Brand</label>
                    <select class="form-select" name="make" id="make" aria-label="Default select example">
                      <option selected>Select Brand</option>
                      <option value="Acer">Acer</option>
                      <option value="Asus">Asus</option>
                      <option value="HP">HP</option>
                      <option value="Dell">Dell</option>
                      <option value="Lenovo">Lenovo</option>
                      <option value="Sony">Sony</option>
                      <option value="Toshiba">Toshiba</option>
                      <option value="Compaq">Compaq</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model" class="form-control" placeholder="Model">
                  </div>
                  <div class="col-lg">
                    <label for="serial">Serial</label>
                    <input type="text" name="serial" id="serial" class="form-control" placeholder="Serial">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg">
                      <label for="date_acquired">Date Acquired</label>
                      <input type="date" name="date_acquired" id="date_acquired" class="form-control" placeholder="Date Acquired">
                  </div>
                  <div class="col-lg">
                    <label for="os">OS</label>
                    <select class="form-select" name="os" id="os" aria-label="Default select example">
                      <option selected>Select OS</option>
                      <option value="Windows XP">Windows XP</option>
                      <option value="Windows 7">Windows 7</option>
                      <option value="Windows 8">Windows 8</option>
                      <option value="Windows 10">Windows 10</option>
                      <option value="Windows 11">Windows 11</option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                CPU Details
              </button>
            </h2>
            <div id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
              <div class="modal-body p-4 bg-light">
              <label for="ram">Processor Details:</label>
                <div class="row">
                    <div class="col-lg">
                      <input type="text" name="processor" id="processor" class="form-control" placeholder="Processor">
                    </div>
                    <div class="col-lg">
                      <input type="number" name="proc_speed" id="proc_speed" class="form-control" placeholder="Speed(GHz)">
                    </div>
                </div>
                <hr>
                <label for="ram">RAM Details:</label>
                <div class="row">
                  <div class="col-lg">
                    <select class="form-select" name="ram_type" id="ram_slots" aria-label="Default select example">
                        <option selected>Select Type</option>
                        <option value="DDR2">DDR2</option>
                        <option value="DDR3">DDR3</option>
                        <option value="DDR4">DDR4</option>
                        <option value="DDR5">DDR5</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <input type="number" name="ram_slots" id="ram_slots" class="form-control" placeholder="Ram Slots">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg pt-2">
                    <input type="number" name="ram_capacity" id="ram_capacity" class="form-control" placeholder="Ram Capacity(GB)">
                  </div>
                  <div class="col-lg pt-2">
                    <input type="number" name="ram_mhz" id="ram_mhz" class="form-control" placeholder="Ram Speed(MHz)">
                  </div>
                </div>
                <hr>
                <label for="drive">Hard Drive Details:</label>
                <div class="row">
                  <div class="col-lg">
                  <select class="form-select" name="drve_type" id="drve_type" aria-label="Default select example">
                      <option selected>Select Type</option>
                      <option value="HDD">HDD</option>
                      <option value="SSD">SSD</option>
                  </select>
                  </div>
                  <div class="col-lg">
                    <input type="number" name="drve_capacity" id="drve_capacity" class="form-control" placeholder="Drive Capacity(GB)">
                  </div>
                </div> 
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="m-3">
          <hr>
          <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
          <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}

<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-primary d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Employees Data</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Add New Data</button>
          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {

      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url: '{{ route('store') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Data Added Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#add_employee_btn").text('Add Data');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#fullname").val(response.fullname);
            $("#department").val(response.department);
            $("#position").val(response.position);
            $("#email").val(response.email);
            $("#make").val(response.make);
            $("#model").val(response.model);
            $("#serial").val(response.serial);
            $("#category").val(response.category);
            $("#date_acquired").val(response.date_acquired);
            $("#os").val(response.os);
            $("#processor").val(response.processor);
            $("#proc_speed").val(response.proc_speed);
            $("#ram_type").val(response.ram_type);
            $("#ram_slots").val(response.ram_slots);
            $("#ram_capacity").val(response.ram_capacity);
            $("#ram_mhz").val(response.ram_mhz);
            $("#drve_type").val(response.drve_type);
            $("#drve_capacity").val(response.drve_capacity);
            $("#remarks").val(response.remarks);
            $("#avatar").html(
              `<img src="storage/images/${response.avatar}" width="100" class="img-fluid img-thumbnail">`);
            $("#emp_id").val(response.id);
            $("#emp_avatar").val(response.avatar);
          }
        });
      });

      // update employee ajax request
      $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '{{ route('update') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Data Updated Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update Data');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllEmployees();

      function fetchAllEmployees() {
        $.ajax({
          url: '{{ route('fetchAll') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_employees").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
</body>

</html>