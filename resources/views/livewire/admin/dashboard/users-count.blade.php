<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <div class="d-flex justify-content-between">
                <h3 wire:loading.delay.remove>{{ $usersCount }}</h3>
                <div wire:loading.delay>
                    <x-animations.ballbeat />
                </div>
                <select wire:change="getUsersCount($event.target.value)" style="height: 2rem; outline: 2px solid transparent;" class="px-1 rounded border-0">
                    <option value="TODAY">Hoje</option>
                    <option value="30">30 dias</option>
                    <option value="60">60 dias</option>
                    <option value="360">360 dias</option>
                    <option value="MTD">Do mês até a data</option>
                    <option value="YTD">Do ano até a data</option>
                </select>
            </div>
            <p>Usuários</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('admin.users') }}" class="small-box-footer">Ver usuários <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
