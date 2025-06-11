    <style>
            .th{
                color:#ffff
            }
            
            </style>


<style>
    .filter-search-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        margin-bottom: 20px;
    }

    .filter-search-container select,
    .filter-search-container input[type="text"] {
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        flex: 1 1 44px;
    }

    .filter-search-container button {
        white-space: nowrap;
    }

    @media (max-width: 600px) {
        .filter-search-container {
            flex-direction: column;
            align-items: stretch;
        }
    }
</style>
  <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">History</h6>


                        <script language="javascript">
                            function go(p) {
                                document.opts.page.value = p;
                                document.opts.submit();
                            }
                        </script>


                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody>
                                <tr>
                                    <div class="filter-search-container">
        <select class="form-control" onchange="if(this.value) window.location.href=this.value;">
        <option value="{{ route('user.Withdraw-History') }}"
            {{ Request::routeIs('user.Withdraw-History') ? 'selected' : '' }}>
            Withdrawal History
        </option>
        <option value="{{ route('user.DepositHistory') }}"
            {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>
            Deposit History
        </option>
        <option value="{{ route('user.DepositHistory') }}"
            {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>
            Direct Income History
        </option>
        <option value="{{ route('user.DepositHistory') }}"
            {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>
            Level Income History
        </option>
 <option value="{{ route('user.DepositHistory') }}"
            {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>
            Roi Income History
        </option>
        

       
    </select>


    <form method="GET" action="{{ route('user.Withdraw-History') }}">
        @csrf
        <div style="display: flex; gap: 10px;">
            <input type="text" name="search" placeholder="Search by Payment Mode or Status" value="{{ request('search') }}">
            <button type="submit" class="tf-button style2">Search</button>
        </div>
    </form>
</div>
                                </tr>
                            </tbody>
                        </table>

                        <br><br>


                        <div class="table-responsive">
                            <table cellspacing="1" cellpadding="2" border="0" width="100%"
                                class="table table-striped table-bordered">
                                	<thead>
											<tr>
                                                <th class="th">S.NO</th>

											<th class="th">Payment Mode</th>

                                             <th class="th">Amount</th>
                                              <th class="th">Status</th>

                                              <th class="th">Created At</th>
                           
											</tr>
										</thead>
                                <tbody>
                                                               @forelse($withdraw_report as $withdraw)

                                    <tr>
                                                    <td class="td">{{ $loop->iteration }}</td> <!-- S.NO -->

                                        <td class="td"> {{ $withdraw->payment_mode }}
                                        </td>
                                        <td class="td"> ${{ number_format($withdraw->amount, 2) }}
                                        </td>
                                        <td class="td" > {{ $withdraw->status }}
                                        </td>
                                        <td class="td" > {{ \Carbon\Carbon::parse($withdraw->created_at)->format('M-d-Y') }}
                                        </td>
                                    </tr>
                                            @empty

                                    <tr>
                                        <td style="color:#fff" colspan="3" align="center">No transactions found</td>
                                    </tr>
                                     @endforelse
                                    <!-- <tr>
                                        <td colspan="3">&nbsp;</td>



                                    </tr> -->
                                </tbody>
                            </table>
       <div class="d-flex justify-content-center mt-4">
        {{ $withdraw_report->links('pagination::bootstrap-4') }}
    </div>

                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
      