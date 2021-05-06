@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
    
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Gerir Perfil</h4>
                 <h6 class="box-subtitle">Edite as informações associadas ao perfil</h6>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">
                               <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nome<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}"></div>
                                        </div>
                                   </div> <!-- End Col Md-6 --> 
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Email<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}"></div>
                                        </div>
                                    </div> <!-- End Col Md-6 -->
                               </div> <!-- End Row -->
                               <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Endereço<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control" required="" value="{{ $editData->address }}"></div>
                                    </div>
                                 </div> <!-- End Col Md-12 -->
                                </div> <!-- End Row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Género<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gender" id="gender" required="" class="form-control">
                                                    <option value="">Selecione o Género</option>
                                                    <option value="Masculino" {{ ($editData->usertype == "Masculino" ? "selected": "") }}>Masculino</option>
                                                    <option value="Feminino" {{ ($editData->usertype == "Feminino" ? "selected": "") }}>Feminino</option> 
                                                </select>
                                        </div>
                                        <div class="form-group">
							</div>
                                        </div>
                                    </div> <!-- End Col Md-4 --> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Número de Telemóvel<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="mobile" class="form-control" required="" value="{{ $editData->mobile }}"></div>
                                        </div>
                                    </div> <!-- End Col Md-4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Imagem de Perfil<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input id="image" type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="Profile Image" style="width: 100px; width: 100px; border: 1px solid #000000;">
                                            </div>
                                        </div>
                                   </div> <!-- End Col Md-4 --> 
                                </div> <!-- End Row -->
                                <div class="text-xs-right">
                                    <br>
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Editar">
                                </div>
                            </div> <!-- End Col Md-6 --> 
                            <div class="col-md-6">

                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
    
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection