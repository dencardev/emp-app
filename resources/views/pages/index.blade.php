@extends('layouts.default')


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
                      <select class="form-select" name="department" aria-label="Default select example">
                        <option selected>Select Department</option>
                        <option value="Office of the Regional Director (ORD)">Office of the Regional Director (ORD)</option>
                        <option value="Office of the Assistant Regional Director (OARD)">Office of the Assistant Regional Director (OARD)</option>
                        <option value="ICT Unit (ICTU)">ICT Unit (ICTU)</option>
                        <option value="Legal Unit (LU)">Legal Unit (LU)</option>
                        <option value="Public Affairs Unit (PAU)">Public Affairs Unit (PAU)</option>
                        <option value="Administrative Division (AD)">Administrative Division (AD)</option>
                        <option value="Assets Management Section (AMS)">Assets Management Section (AMS)</option>
                        <option value="Cashier Section (CS)">Cashier Section (CS)</option>
                        <option value="General Services Section (GSS)">General Services Section (GSS)</option>
                        <option value="Personnel Section (PS)">Personnel Section (PS)</option>
                        <option value="Records Section (RS)">Records Section (RS)</option>
                        <option value="Curriculum and Learning Management Division (CLMD)">Curriculum and Learning Management Division (CLMD)</option>
                        <option value="Education Support Services Division (ESSD)">Education Support Services Division (ESSD)</option>
                        <option value="Health and Nutrition Unit (HNU)">Health and Nutrition Unit (HNU)</option>
                        <option value="Education Facilities Unit (EFU)">Education Facilities Unit (EFU)</option>
                        <option value="Special Programs and Projects Unit (SPPU)">Special Programs and Projects Unit (SPPU)</option>
                        <option value="Field Technical Assistance Division (FTAD)">Field Technical Assistance Division (FTAD)</option>
                        <option value="Finance Division (FD)">Finance Division (FD)</option>
                        <option value="Budget Section (BS)">Budget Section (BS)</option>
                        <option value="Accounting Section (AS)">Accounting Section (AS)</option>
                        <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option>
                        <option value="(HRDD) - NEAP">(HRDD) - NEAP</option>
                        <option value="Policy, Planning, and Research Division (PPRD)">Policy, Planning, and Research Division (PPRD)</option>
                        <option value="Quality Assurance Division (QAD)">Quality Assurance Division (QAD)</option>
                      </select>
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
                      <input type="number" step=".01" name="proc_speed" class="form-control" placeholder="Speed(GHz)">
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
                    <input type="number" step=".01" name="ram_mhz" class="form-control" placeholder="Ram Speed(MHz)">
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
                      <select class="form-select" name="department" id="department" aria-label="Default select example">
                        <option selected>Select Department</option>
                        <option value="Office of the Regional Director (ORD)">Office of the Regional Director (ORD)</option>
                        <option value="Office of the Assistant Regional Director (OARD)">Office of the Assistant Regional Director (OARD)</option>
                        <option value="ICT Unit (ICTU)">ICT Unit (ICTU)</option>
                        <option value="Legal Unit (LU)">Legal Unit (LU)</option>
                        <option value="Public Affairs Unit (PAU)">Public Affairs Unit (PAU)</option>
                        <option value="Administrative Division (AD)">Administrative Division (AD)</option>
                        <option value="Assets Management Section (AMS)">Assets Management Section (AMS)</option>
                        <option value="Cashier Section (CS)">Cashier Section (CS)</option>
                        <option value="General Services Section (GSS)">General Services Section (GSS)</option>
                        <option value="Personnel Section (PS)">Personnel Section (PS)</option>
                        <option value="Records Section (RS)">Records Section (RS)</option>
                        <option value="Curriculum and Learning Management Division (CLMD)">Curriculum and Learning Management Division (CLMD)</option>
                        <option value="Education Support Services Division (ESSD)">Education Support Services Division (ESSD)</option>
                        <option value="Health and Nutrition Unit (HNU)">Health and Nutrition Unit (HNU)</option>
                        <option value="Education Facilities Unit (EFU)">Education Facilities Unit (EFU)</option>
                        <option value="Special Programs and Projects Unit (SPPU)">Special Programs and Projects Unit (SPPU)</option>
                        <option value="Field Technical Assistance Division (FTAD)">Field Technical Assistance Division (FTAD)</option>
                        <option value="Finance Division (FD)">Finance Division (FD)</option>
                        <option value="Budget Section (BS)">Budget Section (BS)</option>
                        <option value="Accounting Section (AS)">Accounting Section (AS)</option>
                        <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option>
                        <option value="(HRDD) - NEAP">(HRDD) - NEAP</option>
                        <option value="Policy, Planning, and Research Division (PPRD)">Policy, Planning, and Research Division (PPRD)</option>
                        <option value="Quality Assurance Division (QAD)">Quality Assurance Division (QAD)</option>
                      </select>
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
                <div class="row">
                    <div class="col-lg">
                    <label for="processor">Processor</label>
                      <input type="text" name="processor" id="processor" class="form-control" placeholder="Processor">
                    </div>
                    <div class="col-lg">
                      <label for="proc_speed">Speed(GHz)</label>
                      <input type="number" step=".01" name="proc_speed" id="proc_speed" class="form-control" placeholder="Speed(GHz)">
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg">
                    <label for="ram_type">RAM Type</label>
                    <select class="form-select" name="ram_type" id="ram_type" aria-label="Default select example">
                        <option selected>Select Type</option>
                        <option value="DDR2">DDR2</option>
                        <option value="DDR3">DDR3</option>
                        <option value="DDR4">DDR4</option>
                        <option value="DDR5">DDR5</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <label for="ram_slots">RAM Slots</label>
                    <input type="number" name="ram_slots" id="ram_slots" class="form-control" placeholder="Ram Slots">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg pt-2">
                    <label for="ram_capacity">RAM Capacity(GB)</label>
                    <input type="number" name="ram_capacity" id="ram_capacity" class="form-control" placeholder="Ram Capacity(GB)">
                  </div>
                  <div class="col-lg pt-2">
                    <label for="ram_mhz">RAM Speed(MHz)</label>
                    <input type="number" step=".01" name="ram_mhz" id="ram_mhz" class="form-control" placeholder="Ram Speed(MHz)">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg">
                  <label for="drve_type">Drive Type</label>
                  <select class="form-select" name="drve_type" id="drve_type" aria-label="Default select example">
                      <option selected>Select Type</option>
                      <option value="HDD">HDD</option>
                      <option value="SSD">SSD</option>
                  </select>
                  </div>
                  <div class="col-lg">
                    <label for="drve_capacity">Drive Capacity(GB)</label>
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
