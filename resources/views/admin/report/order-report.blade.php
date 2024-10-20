@extends('admin.master')

@section('main-content')
<div class="page-content">
   


    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between w-100">
            <h5>Order Report</h5>
            <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z"/>
                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                  </svg>
                Download PDF
            </button>

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="form-label">Start Date : </label>
                    <input type="date" class="form-control" />
                </div>

                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="form-label">End Date : </label>
                    <input type="date" class="form-control" />
                </div>

                <div class="col-md-3">
                    <label class="form-label">Filter By Date : </label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Today</option>
                        <option value="2">Yesterday</option>
                        <option value="3">Last 7 Days</option>
                        <option>This Month</option>
                        <option>Last Month</option>
                      </select>
                </div>

                <div class="col-md-3 d-flex justify-content-between align-items-center" style="margin-top: 25px" >
                 
                    <div class="col" >
                        <button type="button" class="btn btn-primary px-3 px-sm-5">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                              </svg>
                            
                            Filter
                        </button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-primary px-3 px-sm-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                              </svg>
                            Reset</button>
                    </div>

                </div>


            </div>



            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered">
                    <thead style="background: #A9FFCD">
                        <tr>
                            <th>Invoice No</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                         

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1402618334</td>
                            <td>2024-10-14</td>
                            <td>
                                Del
                            </td>
                            <td>3</td>
                            <td>150</td>

                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
