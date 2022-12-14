<?php headerAdmin($data); ?>
<main class="app-content">

    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info" style="background-color: grey;"><img class="user-img" src="Assets/images/avatar.png">
                    <h4>Jose Llanes</h4>
                    <p>Administrador</p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">

                    <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">Ajustes</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane" id="user-timeline">
                    <div class="timeline-post">
                        <div class="post-media"><a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ul class="post-utility">
                        <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                        <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                        <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade active show" id="user-settings">
                <div class="tile user-settings">
                    <h4 class="line-head">Ajustes datos personales</h4>
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label>Nombres</label>
                                <input class="form-control" type="text" value="Jose Manuel">
                            </div>
                            <div class="col-md-4">
                                <label>Apellidos</label>
                                <input class="form-control" type="text" value="Duron Llanes">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label>Correo Electronico</label>
                                <input class="form-control" type="text" value="Jduron@ghil.com">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-8 mb-4">
                                <label>No telefono</label>
                                <input class="form-control" type="text" value="999999">
                            </div>


                            <div class="clearfix"></div>
                            <div class="col-md-8 mb-4">
                                <label>Direccion</label>
                                <input class="form-control" type="text" value="Tegucigalpa DC">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8 mb-4">
                            <label>No Identidad</label>
                            <input class="form-control" type="text" value="9001001915500">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8 mb-4">
                            <label>Nueva contrase??a</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8 mb-4">
                            <label>Confirmar contrase??a</label>
                            <input class="form-control" type="text">
                        </div>
                </div>


                <div class="row mb-10">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="button" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar datos</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>









</main>
<?php footerAdmin($data); ?>