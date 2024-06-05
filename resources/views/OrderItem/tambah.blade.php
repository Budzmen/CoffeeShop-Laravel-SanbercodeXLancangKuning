@extends ('layout.master')

@section ('content')
<!-- contact section start -->
<div class="contact_section layout_padding">
 <div class="container">
    <div class="row">
       <div class="col-sm-12">
          <h1 class="contact_taital">Pesan</h1>
       </div>
    </div>
 </div>
 <div class="container-fluid">
    <div class="contact_section_2">
       <div class="row">
          <div class="col-md-12">
             <div class="mail_section_1">
                <form method="POST" action="/orderItem">
                    {{-- Validation --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control mail_text" placeholder="Banyak Produk Yang Ingin Dibeli" name="jumlah">
                    </div><br>
                    <div class="send_bt">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection