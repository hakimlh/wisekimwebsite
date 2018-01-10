
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
<a class="navbar-brand" href="#"> Add Products </a>
@overwrite

@section('contents')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Products</h4>
                                    <p class="category">All products</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">

                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Image review</th>
                                            <th>
                                              <!-- <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check_all">
                                                </label>
                                              </div> -->
                                          </th>

                                        </thead>
                                        <tbody>
                                            @foreach($product as $mypro)
                                            <tr>
                                                <td>{{ $mypro->name}}</td>
                                                <td class="text-primary">{{ $mypro->type}}</td>
                                                <td><img src="{{$mypro->img_url }}" alt="review" class="product_image"/></td>
                                                <td>
                                                  <!-- <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="check" value="{{ $mypro->id }}">
                                                    </label>
                                                  </div> -->

                                                  <div class="td-actions">
                                                      <button type="button" rel="tooltip" title="Edit this Product" class="btn btn-primary btn-simple btn-xs">
                                                        <a href="products_edit/{{$mypro->id}}"> <i class="material-icons">edit</i></a>
                                                      </button>
                                                      <button type="submit" rel="tooltip" title="Remove this Product" class="btn btn-danger btn-simple btn-xs">
                                                        <a href="products_tools/{{$mypro->id}}" style="color:#ff0000"> <i class="material-icons">close</i></a>
                                                      </button>
                                                  </div>

                                                </td>
                                            </tr>
                                              @endforeach
                                              <tr>
                                                <td colspan="4" align="center"></h4>
                                              </tr>
                                        </tbody>
																				<tfoot id="upload">
                                          <tr>
                                            <td colspan="4" align="center"><h4>Add Product</strong></h4>
                                          </tr>
																					<tr>
																						<form action="{{ URL('products') }}" method="post" enctype="multipart/form-data"  class="form-group container" name="f2">
																						<td>
																								<label for="name">Product Name</label><br>
																								<input id="name" type="text" class="myinput"  name="name" value="{{ old('name') }}" required autofocus>
																						</td>
																						<td>
																								<label for="type">Product Type</label><br>
																								<select  name="type" class="myinput"  id="type">
																									<option value="Android">Android</option>
																									<option value="iPhone">iPhone</option>
																									<option value="huawei">huawei</option>
																									<option value="Asus">Asus</option>
																									<option value="Xperia">Xperia</option>
																									<option value="Infinix">Infinix</option>
																									<option value="Accent">Accent</option>
																									<option value="Nokia">Nokia</option>
																								</select>

																							</td>
																							<td>
																								<label for="file">Select Product image :</label>
																							   <input type="file" name="file" id="file">

																							</td>
																							<td>
																								<input type="submit" value="ADD" name="submit" id="sub1">
																								<input type="hidden" value="{{ csrf_token() }}" name="_token">
																							</td>
																					</form>
																					</tr>
																				</tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@overwrite
