<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Configurações</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Configurações</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Configurações gerais</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form wire:submit.prevent="updateSetting">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="siteName">Nome do site</label>
                                    <input wire:model.defer="state.site_name" type="text" class="form-control" id="siteName" placeholder="Digite o nome do site">
                                </div>
                                <div class="form-group">
                                    <label for="siteEmail">Email do site</label>
                                    <input wire:model.defer="state.site_email" type="email" class="form-control" id="siteEmail" placeholder="Digite o email do site">
                                </div>
                                <div class="form-group">
                                    <label for="siteTitle">Titulo do site</label>
                                    <input wire:model.defer="state.site_title" type="text" class="form-control" id="siteTitle" placeholder="Digite o titulo do site">
                                </div>
                                <div class="form-group">
                                    <label for="footerText">exto do rodapé</label>
                                    <input wire:model.defer="state.footer_text" type="text" class="form-control" id="footerText" placeholder="Digite o texto do rodapé">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input wire:model.defer="state.sidebar_collapse" type="checkbox" class="custom-control-input" id="sidebarCollapse">
                                        <label class="custom-control-label" for="sidebarCollapse">Recolhimento da barra lateral</label>
                                    </div>
                                    <!-- <label for="sidebar_collapse">Sidebar Collapse</label><br>
                                    <input wire:model.defer="state.sidebar_collapse" type="checkbox" id="sidebar_collapse"> -->
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Salvar alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('js')
<script>
    $('#sidebarCollapse').on('change', function() {
        $('body').toggleClass('sidebar-collapse');
    })
</script>
@endpush
