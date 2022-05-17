
<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')
  </head>
  <body>

      <!-- partial -->

      @include('admin.sidebar')



@include('admin.navbar')



        <!-- partial -->

        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">


            @if(session()->has('message'))


<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert"></button>

{{session()->get('message')}}
</div>

@endif

<table>
    <tr style="background-color: gray">
        <td style="padding:30px;">Title</td>
        <td style="padding:30px;">Description</td>
        <td style="padding:30px;">Price</td>
        <td style="padding:30px;">Image</td>
        <td style="padding:30px;">Update</td>
        <td style="padding:30px;">Delete</td>
    </tr>
    @foreach($data as $rooms)


    <tr align="center" style="background-color: black;" >
        <td >{{$rooms->title}}</td>
        <td >{{$rooms->description}}</td>
        <td >{{$rooms->price}}</td>
        <td >
            <img height="150px" width="150px" src="/roomimage/{{$rooms->image}}">
        </td>

        <td>
            <a class="btn btn-primary" href="{{url('updateview',$rooms->id)}}">Update</a>
        </td>
        <td>
            <a class="btn btn-danger" href="{{url('deleterooms',$rooms->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach


</table>


</div>
</div>


          <!-- partial -->
       @include('admin.script')
  </body>
</html>
