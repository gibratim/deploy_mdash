<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-center">
            <p class="mb-0 text-left">Total Matiscope Tests</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-left mb-1">{{$totaltests}}</h3>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-database-plus text-danger icon-lg"></i>
          </div>
          <div class="float-center">
            <p class="mb-0 text-left">+ve RDT & scope Tests</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$totalpositivetests}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-1 mb-0">
          <i class="mdi mdi-plus mr-1" aria-hidden="true"></i> RDT: {{$totalrdtpositivetests}}
        </p>
        <p class="text-muted mt-1 mb-0">
          <i class="mdi mdi-plus mr-1" aria-hidden="true"></i> M/scope: {{$totalscopepositivetests}}
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-database-minus text-warning icon-lg"></i>
          </div>
          <div class="float-center">
            <p class="mb-0 text-left">-ve RDT & Scope Tests</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$totalnegativetests}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-1 mb-0">
          <i class="mdi mdi-minus mr-1" aria-hidden="true"></i> RDT: {{ $totalrdtnegativetests }}
        </p>
        <p class="text-muted mt-1 mb-0">
          <i class="mdi mdi-minus mr-1" aria-hidden="true"></i> M/scope: {{ $totalscopenegativetests }}
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-location text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Locations</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{ $locations}}</h3>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              <!--weather card-->
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <div class="mr-auto">
                      <h4 class="display-3">{{$totalmale}}
                        <span class="symbol display-5 text-muted"> ->{{number_format($malepercentage, 1, '.', ',')}}%</span></h4>
                      <p>
                        Male
                      </p>
                    </div>
                  </div>
                  <div class="weather-data d-flex">
                    <div class="mr-auto">
                      <h4 class="display-3">{{$totalfemale}}
                        <span class="symbol display-5 text-muted"> ->{{number_format($femalepercentage, 1, '.', ',')}}%</span></h4>
                      <p>
                        Female
                      </p>
                    </div>
                  </div>
                  
                </div>
                
              </div>
              <!--weather card ends-->
            </div>
            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Age Bracket Analysis</h2>
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Below 5</p>
                      <p class="mb-2 text-primary">{{number_format($belowfive, 1, '.', ',')}}%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($belowfive, 1, '.', ',')}}%" aria-valuenow="{{number_format($belowfive, 1, '.', ',')}}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Btn 5 and 10 years</p>
                      <p class="mb-2 text-success">{{number_format($belowten, 1, '.', ',')}}%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($belowten, 1, '.', ',')}}%" aria-valuenow="{{number_format($belowten, 1, '.', ',')}}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Btn 10 and 25 years</p>
                      <p class="mb-2 text-success">{{number_format($belowtwentyfive, 1, '.', ',')}}%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($belowtwentyfive, 1, '.', ',')}}%" aria-valuenow="{{number_format($belowtwentyfive, 1, '.', ',')}}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Above 25 years</p>
                      <p class="mb-2 text-success">{{number_format($abovetwentyfive, 1, '.', ',')}}%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($abovetwentyfive, 1, '.', ',')}}%" aria-valuenow="{{number_format($abovetwentyfive, 1, '.', ',')}}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


<div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row d-none d-sm-flex mb-4">
                    <div class="col-3">
                      <h5 class="text-primary">Malaria +</h5>
                      <p>{{ $totalsplusone }}</p>
                    </div>
                    <div class="col-3">
                      <h5 class="text-primary">Malaria ++</h5>
                      <p>{{ $totalsplustwo }}</p>
                    </div>
                    <div class="col-3">
                      <h5 class="text-primary">Malaria +++</h5>
                      <p>{{ $totalsplusthree }}</p>
                    </div>
                    <div class="col-3">
                      <h5 class="text-primary">Malaria ++++</h5>
                      <p>{{ $totalsplusfour }}</p>
                    </div>
                  </div>
                  <div class="chart-container">
                    <canvas id="dashboard-area-chart" height="80"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>



