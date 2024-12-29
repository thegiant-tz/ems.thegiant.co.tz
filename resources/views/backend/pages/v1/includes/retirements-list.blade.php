<div class="col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h5>Requests</h5>
            <div class="card-header-right p-3">
                <a href="#">See All</a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover m-b-0 ">
                    <thead>
                        <tr>
                            <th>S/No</th>
                            <th>Initiator</th>
                            <th>Descriptions</th>
                            <th>Reason</th>
                            <th>Department</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 10) as $i)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Software pro</td>
                            <td>Task</td>
                            <td><label class="badge badge-light-danger">Open</label>
                            </td>
                            <td>John Malit</td>
                            <td>Normal</td>
                            <td>8/8/2017</td>
                            <td>8/9/2018</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>