@extends('admin.master')

@section('main-content')
<div class="page-content">



    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between w-100">
            <h5>Sale Report</h5>
            <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z" />
                    <path
                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                </svg>
                Download PDF
            </button>

        </div>
        <div class="card-body">

            <form id="filterForm" method="GET" action="{{ route('saleFilter') }}">
                <div class="row">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <label class="form-label">Start Date : </label>
                        <input type="date" name="start_date" class="form-control"
                            value="{{ request()->get('start_date') }}" />
                    </div>

                    <div class="col-md-2 mb-3 mb-md-0">
                        <label class="form-label">End Date : </label>
                        <input type="date" name="end_date" class="form-control"
                            value="{{ request()->get('end_date') }}" />
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Filter By Day : </label>
                        <select name="date_filter" class="form-select" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            <option value="today">Today</option>
                            <option value="yesterday">Yesterday</option>
                            <option value="last_7_days">Last 7 Days</option>
                            <option value="this_month">This Month</option>
                            <option value="last_month">Last Month</option>
                        </select>
                    </div>



                    <div class="col-md-2">
                        <label for="single-select-field" class="form-label">Filter By Product :</label>
                        <select class="form-select" name="product_filter" id="single-select-field"
                            data-placeholder="Choose one thing">

                            <option></option>

                            @foreach($allProduct as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>






                    <div class="col-md-3 d-flex justify-content-between align-items-center" style="margin-top: 25px">
                        <div class="col">
                            <button type="submit" class="btn btn-primary px-3 px-sm-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-funnel" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
                                </svg>
                                Filter
                            </button>
                        </div>

                        <div class="col">
                            <a href="{{ route('report') }}" class="btn btn-primary px-3 px-sm-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path
                                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                                    <path fill-rule="evenodd"
                                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                                </svg>
                                Reset
                            </a>
                        </div>
                    </div>
                </div>
            </form>




            <div class="table-responsive mt-3 " style="display: none">
                <table id="example" class="table table-striped table-bordered">
                    <thead style="background: #A9FFCD">
                        <tr>
                            <th>Total Amount</th>
                            <th>Delivered Amount</th>
                            <th>Cancel Amount</th>
                            <th>Return Amount</th>



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

                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-body">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body" style="background: #C6E5C3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 fw-bold" style="color: black; font-size : 25px">৳ 0</p>
                                    <h6 class="my-1">Total Amount</h6>

                                </div>


                                <div class="ms-auto">

                                    <img src="http://127.0.0.1:8000/assets/static/pending.webp"
                                        style="width:60px; height: 60px">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body" style="background: #9794FF">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 fw-bold" style="color: black; font-size : 25px">৳ 0</p>
                                    <h6 class="my-1">Delivered Amount</h6>

                                </div>


                                <div class="ms-auto">

                                    <img src="http://127.0.0.1:8000/assets/static/confirmed.webp"
                                        style="width:60px; height: 60px">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body" style="background: #C69AE7">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 fw-bold" style="color: black; font-size : 25px">৳ 0</p>
                                    <h6 class="my-1">Cancel Amount</h6>

                                </div>


                                <div class="ms-auto">

                                    <img src="http://127.0.0.1:8000/assets/static/cancel.webp"
                                        style="width:60px; height: 60px">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body" style="background: #6FE45F">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 fw-bold" style="color: black; font-size : 25px">৳ 0</p>
                                    <h6 class="my-1">Return Amount</h6>

                                </div>


                                <div class="ms-auto">

                                    <img src="http://127.0.0.1:8000/assets/static/pickup.png"
                                        style="width:60px; height: 60px">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>


        </div>




    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection

@push('scripts')

<!-- Include ApexCharts library -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>



<script>
    // Convert PHP data to JavaScript arrays
    var totalOrderAmounts = @json($total_order_amounts_data);
    var totalDeliveryAmounts = @json($total_delivery_amounts_data);
    var totalCancelAmounts = @json($total_cancel_amounts_data);
    var totalReturnAmounts = @json($total_return_amounts_data);
    var months = @json($months); // Changed from 'dates' to 'months'

    var options = {
        series: [{
            name: 'Total',
            data: totalOrderAmounts
        }, {
            name: 'Delivery',
            data: totalDeliveryAmounts
        }, {
            name: 'Cancel',
            data: totalCancelAmounts
        }, {
            name: 'Return',
            data: totalReturnAmounts
        }],
        chart: {
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'category',  // Use 'category' to prevent interpolation
            categories: months // Use the dynamically generated months
        },
        tooltip: {
            x: {
                format: 'yyyy-MM-dd'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>





@endpush