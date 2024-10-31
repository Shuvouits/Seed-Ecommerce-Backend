@extends('admin.master')

@section('main-content')

<style>
    .theme{
        position: relative;
    }
    .theme-icon{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
</style>

<div class="page-content">


    <div class="card">

        <div class="card-header">
            <h5>All Available Template</h5>
        </div>
        <div class="card-body">

            

            <div class="table-responsive" style="display: none">
                <table id="example" class="table table-striped table-bordered">
                    <thead style="background: #A9FFCD">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($templates as $count => $item)
                        <tr>
                            <td>{{$count + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <img src="{{ asset($item->image) }}"
                                    style="width: 200px; height: 150px; border-radius: 10px" />
                            </td>


                            <td>
                                <div class="d-flex justify-content-start align-items-center" style="gap: 13px;">
                                    <a href="{{route('template.edit', $item->id)}}" class="btn btn-primary px-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                        Edit
                                    </a>

                                    <form action="{{ route('template.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-5"
                                            onclick="return confirm('Are you sure you want to delete this template?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>



                                </div>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>

            <div class="row g-2">

                @foreach($templates as $count => $item)
        
                <div class="col-md-3">
                    <div class="theme">
        
                        <img src="{{ asset($item->image) }}" class="img-fluid" style=" border: 1px solid gainsboro" />

                        <div class="theme-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="red" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                              </svg>
                        </div>

        
                    </div>

                  
        
                </div>
                @endforeach
        
            </div>


            



        </div>
    </div>

   
   



  



</div>

@endsection