@extends('layouts.header')
@section('content')
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
  .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}
</style>
<!-- <div class="tm-home-img-container" style="background-image: url('{{url('assets/img/tm-home-img1.jpg')}}');">
            <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div> -->
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">{{$title}}</h2>
                    </div>
                </div>
                <div class="row">
                <table id="customers">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                  </tr>
                  @php $no =1 @endphp
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->address}}</td>
                  </tr>
                  @php $no++ @endphp
                  @endforeach
                </table>

                     {{ $data->links() }}
                
                </div> <!-- row -->
                
            </div>
        </section>
        @endsection