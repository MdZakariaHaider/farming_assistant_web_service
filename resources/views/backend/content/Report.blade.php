@extends('backend.master')
@section('orders')
{{-- data table --}}
    <div class="container">
      @if(session()->has('error'))
      <div class="alert alert-danger">
          {{session()->get('error')}}
      </div>
      @endif


        <div class="row form-control">
            <form action="{{ route('ReportGenerate') }}" method="get">
                
                <div class="row">
                    <div class="col-md-4">
                    <H3> From:</h3>
                        <input type="date" class="form-control" name="from_date">
                    </div>
                    <div class="col-md-4">
                    <h3> To:</h3>
                        <input type="date" class="form-control" name="to_date">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-light" type="submit">Search</button>
                    </div>


                    {{-- <div class="col text-end">
                        <button class="btn btn-success" onclick="window.print()"><span data-feather="printer"></span></button>
                    </div> --}}


                    <div class="col text-end">
                        <button class="btn btn-success" onclick="printDiv('printableArea')" onclick="window.print()"><span
                                data-feather="printer"></span></button>
                    </div>

                </div>
            </form>
            <br>
            <hr>

            <div id="printableArea">
                {{-- @if (isset($fromDate))
                <div class="container">
                    <h2>Production report from: {{ date('M-d, Y', strtotime($fromDate)) }} to {{ date('M-d, Y', strtotime($toDate)) }} </h2>
                    <h3>Number of records: {{ count($search) }}</h3>
                </div>
                @endif --}}
                <table class="table rounded">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                                                    
                            <th scope="col">User ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($search as $key => $data)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $data->product_id }}</td>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->product_price}}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->user_id }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                {{-- @if (isset($fromDate))
                    <div class="row mt-3 d-flex justify-content-between">
                        <div class="col">
                            <p>Prepared By,</p>
                            <p>Date: {{ $time }}</p>
                        </div>
                        <div class="col">
                            <h3 class="border-bottom text-secondary">Production Manager</h3>
                            <h5>Ergon Pharmaceuticals Ltd,</h5>
                            <p>House # 04 (3rd Floor), Mohakhali C/A, Dhaka-1212, Bangladesh.</p>
                            <p>Tel : +02 989 42 92.</p>
                        </div>

                @endif --}}
            </div>
        </div>



        <br>


    </div>



<script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>




@endsection