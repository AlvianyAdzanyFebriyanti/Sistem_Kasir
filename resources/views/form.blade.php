@extends('home')

@section('form')
<div class="col-lg-12" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >
    <br>
    <form action="/proses" method="post" class="forms-sample">
        @csrf
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Fill This Form</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="KodeBarang">Product Code</label>
                          <input type="text" class="form-control" name="kodeBarang" placeholder="Product Code">
                        </div>
                        <div class="form-group">
                          <label for="NamaBarang">Product Name</label>
                          <input type="text" class="form-control" name="namaBarang" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                          <label for="JenisBarang">Product Type</label>
                          <select class="js-example-basic-single w-100"  name="jenisBarang">
                            <option >Food Products</option>
                            <option >Beverage Products</option>
                            <option >Health and Hygiene Products</option>
                            <option >Household Products</option>
                            <option >Beauty Products</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="text" class="form-control" name="qty" placeholder="QTY">
                          </div>
                          <div class="form-group">
                            <label for="qty">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" name="harga" >
                              </div>
                          </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
       
</div>
@endsection