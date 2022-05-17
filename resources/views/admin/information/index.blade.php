@extends('admin.layout.index')

@section('title')
   Website Information
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <form action="{{route('admin.information.update',$information->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Enter Phone Number</label>
                                <input type="text" name="phone" placeholder="Enter Phone Number" value="{{$information->phone}}" class="form-control" required>
                            </div>   
                            <div class="form-group">
                                <label>Upload Logo <a href="{{asset($information->image)}}"><i class="fa fa-eye"></i></a></label>
                                <input type="file" name="image"  class="form-control" >
                            </div> 
                            <div class="form-group">
                                <label>Enter Email Address</label>
                                <input type="email" name="email" placeholder="Enter Email Address" value="{{$information->email}}" class="form-control" required>
                            </div>  
                            <div class="form-group">
                                <label>Enter About Us Information</label>
                                <textarea name="about" id="" cols="30" rows="2" class="form-control">{{$information->about}}</textarea>                                        
                            </div>       
                            <div class="form-group">
                                <label>Enter Address</label>
                                <input type="text" name="address" placeholder="Enter Address" value="{{$information->address}}" class="form-control" required>
                            </div> 
                            <div class="form-group">
                                <label>Enter Privacy Policy Content</label>
                                <textarea name="pdescription" id="" cols="30" rows="2" class="form-control">{{$information->pdescription}}</textarea>                                        
                            </div>     
                            <div class="form-group">
                                <label>Enter Facebook Link</label>
                                <input type="text" name="fb" placeholder="Enter Facebook Link" class="form-control" value="{{$information->fb}}" required>
                            </div>  
                            <div class="form-group">
                                <label>Enter Instagram Link</label>
                                <input type="text" name="insta" value="{{$information->insta}}" placeholder="Enter Instagram Link" class="form-control" required>
                            </div>  
                            <div class="form-group">
                                <label>Enter Twitter Link</label>
                                <input type="text" name="twitter" value="{{$information->twitter}}" placeholder="Enter Twitter Link" class="form-control" required>
                            </div>  
                            
                            <div class="form-group">
                                <label>Enter Pinterest Link</label>
                                <input type="text" name="pt" value="{{$information->pt}}" placeholder="Enter Pinterest Link" class="form-control" required>
                            </div>  
                            <div class="form-group">
                                <label><strong>Website Control</strong></label>
                                <br>
                                <label><input @if(@$information->website_switch) checked @endif type="radio" name="website_switch" value="1"> On</label>
                                <label><input @if(!@$information->website_switch) checked @endif type="radio" name="website_switch" value="0"> Off </label>
                              </div>
                            <div class="form-group">
                                <input type="submit" value="Update" name="txt" class="mt-4 btn btn-primary">
                            </div>
                        </form>
                    </div>                                        
                </div>

            </div>
        </div>
    </div>

    
</div>
@endsection