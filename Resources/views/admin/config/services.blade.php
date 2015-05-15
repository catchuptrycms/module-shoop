@extends(partial('admin::admin.config._form'))

@section('admin-form')
    <div class="alert alert-warning"><strong>Warning:</strong> This panel is still WIP and might not work 100%, if at all.</div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Google</h3>
        </div>
        <div class="panel-body">
            {!! Form::Config('cms.core.app.google-analytics')->label('Google Analytics Code') !!}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Bugsnag</h3>
        </div>
        <div class="panel-body">
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">OAuth</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Key</th>
                        <th>Secret</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
