@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Invoices</h4>
            <p class="card-category">Invoices Captured Today</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Invoice ID
                  </th>
                  <th>
                    Service Provider 
                  </th>
                  <th>
                    PO Number
                  </th>
                  <th>
                    Type
                  </th>
                  <th>
                    Amount
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      23
                    </td>
                    <td>
                      Undertaking
                    </td>
                    <td class="text-primary">
                      N$36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      56
                    </td>
                    <td>
                     claims
                    </td>
                    <td class="text-primary">
                      N$23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      34
                    </td>
                    <td>
                       Medical
                    </td>
                    <td class="text-primary">
                      N$56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      89
                    </td>
                    <td>
                      Call Center
                    </td>
                    <td class="text-primary">
                      N$38,735
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
@endsection