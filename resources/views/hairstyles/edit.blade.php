@extends('layouts.master')
@section('contentpanel')
<style type="text/css">
  .mfp-iframe-holder .mfp-content{
  width:auto;
}</style>
<div class="contentpanel">
    <div class="row">
      <div class="col-sm-12">
      <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 style="font-size: 13px" class="panel-title">Personal Information</h4>
                    <p>Please fill in your personal information.</p>
                  </div>
                  <div class="panel-body">
                   <div class="main">
                    <div class="col-sm-12">
            <form action="{{url('/hairstyles/update/'.$hairstyles->hairstyle_id)}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="col-sm-12">
                                       <div class="cntct_dtls" style=" margin-top:2%;">
                                         <div class="rg_bor" style="border-right:none;">
                                           <ul>
                                             <li>
                                               <div class="lbl_lfts">Hairstyles Image</div>
                                               <div class="lbl_rgts"><div class="col-sm-12">
                                                    <input type="file" name="image" accept="image/*"/>
                                                </div>
                                                </div>
                                                <div class="lbl_lfts">&nbsp;</div>
                                                <div class="lbl_rgts"><div class="col-sm-12">
                                                <a href="{{url('/hairstyles/edit/midpoint',$hairstyles->hairstyle_id)}}">
                                                <img src="{{url('/uploads/hairstyles/'.$hairstyles->image)}}" alt="{{$hairstyles->image}}"  class="img-thumbnail img-responsive img-rounded" style="max-height:200px; max-width:400px;">
                                                </a>
                                                </div>
                                                </div>
                                              </li>
                                                 <li>
                                                <div class="lbl_lfts">Hairstyles Name</div>
                                                <div class="lbl_rgts"><div class="col-sm-12">
                                                    <input type="text" name="name" value="{{$hairstyles->name}}"/>
                                                </div>
                                                </div>
                                              </li>
                                              <li>
                                              <div class="lbl_lfts">Hairstyles Category</div>
                                              <div class="lbl_rgts"><div class="col-sm-12">
                                              <select name="category" id="">
                                              @foreach($category as $category)
                                                    <option value="{{$category->category_id}}" @if($category->category_id==$hairstyles->category_id){{"selected"}}@endif>{{$category->name}}</option>
                                               @endforeach
                                              </select>
                                              </div>
                                              </div>
                                              </li>
                                              <li>
                                              <div class="lbl_lfts">Hairstyles Description</div>
                                              <div class="lbl_rgts"><div class="col-sm-12">
                                                    <input type="text" name="description" value="{{$hairstyles->description}}"/>
                                              </div>
                                              </div>
                                              </li>
                                             </ul>
                                             <div class="sv-btn"><button class="btn btn-primary" type="submit">Save</button>&nbsp;<button class="btn btn-primary">Cancel</button></div>
                                         </div>
                                       </div>
                        </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
@stop
