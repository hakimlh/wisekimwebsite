
@extends('layouts.template')
@section('active')
<ul class="nav">
    <li >
        <a href="dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="user">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li class="active">
        <a href="table">
            <i class="material-icons">content_paste</i>
            <p>Add Products</p>
        </a>
    </li>
    <li>
        <a href="typography">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li>
        <a href="icons">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li >
        <a href="maps">
            <i class="material-icons">location_on</i>
            <p>Maps</p>
        </a>
    </li>
    <li>
        <a href="notifications">
            <i class="material-icons text-gray">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="upgrade">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
</ul>
@overwrite
@section('page_titre')
<a class="navbar-brand" href="#"> Edit Products </a>
@overwrite

@section('contents')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Product</h4>
                                </div>
                                <div class="card-content table-responsive">
                                  <table class="table">
                                      <thead class="text-primary">

                                          <th>Name</th>
                                          <th>Type</th>
                                          <th>Image</th>
                                          <th>Save</th>
                                      </thead>
                                      <tfoot id="upload">
                                        <tr>
                                          <td colspan="4" align="center"><img src="{{$product->img_url }}" alt="review" class="product_image"/></h4>
                                        </tr>
                                        <tr>
                                          {!! Form::open(array('URL' => '/products_edit/$product->id', 'class' => 'form-group container','method' => 'post','enctype'=>'multipart/form-data')) !!}
                                          <td>
                                              {!! Form::label('Product Name') !!}<br>
                                              {!! Form::text('name', $product->name,
                                                   array('required','autofocus',
                                                          'class'=>'myinput',
                                                         'placeholder'=>'Product Name')) !!}
                                          </td>
                                          <td>
                                              {!! Form::label('Product Type') !!}<br>
                                              {{ Form::select('type', [
                                                   'Android' => 'Android',
                                                   'iPhone' => 'iPhone',
                                                   'Asus' => 'Asus',
                                                   'Infinix' => 'Infinix',
                                                   'Xperia' => 'Xperia',
                                                   'Nokia' => 'Nokia',
                                                   'huawei' => 'huawei'], $product->type, ['class' => 'myinput']) }}
                                            </td>
                                            <td>
                                               {!! Form::label('Product Type') !!}
                                               {{ Form::file('file', ['class' => 'field']) }}
                                            </td>
                                            <td>
                                              {!! Form::submit( 'Save Product', ['class' => 'btn btn-default', 'name' => 'submit', 'id' => 'sub1', 'value' => 'save'])!!}
                                            </td>
                                        {{ Form::close() }}
                                        </tr>
                                      </tfoot>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
@overwrite
