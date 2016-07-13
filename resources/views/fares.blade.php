@extends('layouts.main')
@section('contents')
    <div class="starter-template">
        <div class="row">
            <table class="table table-striped table-condensed table-responsive" style="margin-top: -28px; margin-left: -12px; margin-right: 10px;">
                <thead style="background-color: #435970; color: white; font-size: 12px; font-weight: bold">
                <tr>
                    <th colspan="3"></th>
                    <th colspan="3" style="text-align: center">Fares</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Route</th>
                    <th>From Area</th>
                    <th>To Area</th>
                    <th>1st Class (<small>Tsh</small>)</th>
                    <th>2nd Class (<small>Tsh</small>)</th>
                    <th>3rd Class (<small>Tsh</small>)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>TABORA</td>
                    <td>LULANGURU</td>
                    <td>1,200</td>
                    <td>800</td>
                    <td>500</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>LULANGURU</td>
                    <td>MABAMA</td>
                    <td>1,000</td>
                    <td>800</td>
                    <td>300</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>MABAMA</td>
                    <td>USOKE</td>
                    <td>1,100</td>
                    <td>700</td>
                    <td>400</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>USOKE</td>
                    <td>URAMBO</td>
                    <td>2,100</td>
                    <td>1,500</td>
                    <td>700</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>URAMBO</td>
                    <td>KALIUA</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>400</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tabora- Kaliua- Mpanda</td>
                    <td>KALIUA</td>
                    <td>UYUMBU</td>
                    <td>2,100</td>
                    <td>1,500</td>
                    <td>700</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</button>
                            <button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection