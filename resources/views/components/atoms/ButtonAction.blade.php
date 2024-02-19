<td style="white-space: nowrap !important;">
    <div class="d-inline">
        <div class="form-button-action">
            @if ($read != null)
                <button type="button" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg"
                    data-original-title="View Data" onclick="window.location.href = '/read/{{ $read }}'">
                    <i class="fa fa-eye"></i>
                </button>
            @endif
            @if ($print != null)
                <button type="button" data-toggle="tooltip" class="btn btn-link btn-warning btn-lg"
                    data-original-title="Print Data" onclick="window.location.href = '/print/{{ $print }}'">
                    <i class="fa fa-print"></i>
                </button>
            @endif
            @if ($edit != null)
                <button type="button" data-toggle="tooltip" class="btn btn-link btn-warning btn-lg"
                    data-original-title="Edit Data" onclick="window.location.href = '/edit/{{ $edit }}'">
                    <i class="fa fa-edit"></i>
                </button>
            @endif
            @if ($delete != null)
                <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-lg"
                    data-original-title="Delete Data" onclick="window.location.href = '/delete/{{ $delete }}'">
                    <i class="fa fa-trash"></i>
                </button>
            @endif
        </div>
    </div>
</td
