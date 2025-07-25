<?php $page = 'chart-apex'; ?>
@extends('layout.mainlayout_admin')
@section('content')
   <!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content ">

                @component('admin.components.breadcrumb_admin')
                @slot('title')
                    Charts
                @endslot
            @endcomponent

				<div class="row">

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Apex Simple</h5>
							</div>
							<div class="card-body">
								<div id="s-line" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Area Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-line-area" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Column Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-col" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Column Stacked Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-col-stacked" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->


					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Bar Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-bar" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Mixed Chart</h5>
							</div>
							<div class="card-body">
								<div id="mixed-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-header">
								<h5 class="card-title">Donut Chart</h5>
							</div>
							<div class="card-body">
								<div id="donut-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-header">
								<h5 class="card-title">Radial Chart</h5>
							</div>
							<div class="card-body">
								<div id="radial-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->
    @component('admin.components.themesettings')
@endcomponent
@endsection
