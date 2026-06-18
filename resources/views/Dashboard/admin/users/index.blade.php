@extends("Layout.layouttwo")
@section("AdminContent")

<style>
  .page-head {
    display:flex;align-items:center;justify-content:space-between;gap:12px;margin:12px 0 8px;
  }
  .page-head h1{font-size:22px;font-weight:700;margin:0}
  .meta {font-size:13px;color:#6b7280}
  .toolbar {display:flex;align-items:center;gap:10px}
  .search-field{
    height:38px;border:1px solid #e5e7eb;border-radius:999px;padding:0 14px;min-width:260px;outline:none;
  }
  .btn-primary{
    background:#1d3a7d;border:none;color:#fff;border-radius:999px;padding:9px 16px;font-weight:600;
  }
  .btn-primary:hover{background:#fc9928
;color:#fff}
  .table-wrapper{margin-top:12px}
  .table-responsive{border:1px solid #eef0f3;border-radius:10px;overflow:hidden}
  table.table{margin:0}
  thead th{background:#f8fafc;border-bottom:1px solid #eef0f3;color:#111827;font-weight:600}
  tbody td{vertical-align:middle}
  .avatar{
    width:40px;height:40px;border-radius:50%;object-fit:cover;border:1px solid #e5e7eb;background:#fff;
  }
  .user-cell{display:flex;align-items:center;gap:10px}
  .user-name{font-weight:600;color:#111827}
  .user-sub{font-size:12px;color:#6b7280;line-height:1}
  .chip{
    display:inline-block;padding:4px 10px;border-radius:999px;font-size:12px;font-weight:600;
    border:1px solid #e5e7eb;background:#fff;color:#374151;
  }
  .chip.role{border-color:#f3e2e7;background:#fff0f4;color:#b10937}
  /* .actions{display:flex;gap:10px;justify-content:flex-end} */
  .actions {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .actions i {
        color: #1d3a7d;
        cursor: pointer;
        transition: color 0.3s;
    }

    .actions i:hover {
        transform: scale(1.08);
        color: gray;
    }
  .icon-btn{
    display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:8px;
    border:1px solid #e5e7eb;background:#fff;color:#4b5563;
  }
  .icon-btn:hover{background:#f9fafb}
  .table tfoot td{border-top:1px solid #eef0f3;background:#fafbfc}
  @media (max-width: 768px){
    .search-field{min-width:180px}
    .hide-sm{display:none}
  }


  
</style>

<div class="container-fluid">
  <!-- Header -->
  <div class="page-head">
    <div>
      <h1>Users</h1>
      <div class="meta">
        Total: {{ $users->total() }} {{ Str::plural('user',$users->total()) }}
        @if(!empty($q)) • Search: “{{ $q }}” @endif
      </div>
    </div>

    <div class="toolbar">
      <form method="GET" action="{{ route('Dashboard.admin.users.index') }}" class="d-flex align-items-center" role="search">
        <input type="text" name="q" value="{{ $q ?? '' }}" class="search-field" placeholder="Search name, email, role, city...">
      </form>
      <a href="{{ url('users/add') }}" class="btn btn-primary">Add New</a>
    </div>
  </div>

  <!-- Table -->
  <div class="table-wrapper">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead>
          <tr>
            <th style="width:60px">#</th>
            <th>User</th>
            <th class="hide-sm">Location</th>
            <th>Role</th>
            <th class="hide-sm">Zip</th>
            <th class="hide-sm">Organization</th>
            <th style="width:140px" class="text-end">Actions</th>
          </tr>
        </thead>

        <tbody>
          @forelse($users as $i => $item)
            @php
              $rowNo = ($users->currentPage()-1)*$users->perPage() + $i + 1;
              $img = $item->profile_img ?: 'assets/profile_images/default.png';
            @endphp
            <tr>
              <td>{{ $rowNo }}</td>
              <td>
                <div class="user-cell">
                  <img src="{{ asset($img) }}" alt="Avatar" class="avatar">
                  <div>
                    <div class="user-name">{{ $item->firstname }} {{ $item->lastname }}</div>
                    <div class="user-sub">{{ $item->email }}</div>
                  </div>
                </div>
              </td>
              <td class="hide-sm">
                {{ $item->city ? $item->city.', ' : '' }}{{ $item->country }}
              </td>
              <td>
                <span class="chip role">{{ $item->role_name ?? '—' }}</span>
              </td>
              <td class="hide-sm">{{ $item->zip_code }}</td>
              <td class="hide-sm">{{ $item->organization }}</td>
              <td class="text-end">
                <div class="actions">
                  <a class="icon-btn" href="{{ route('Dashboard.admin.users.view', $item->id) }}" title="View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a class="icon-btn" href="{{ route('Dashboard.admin.users.edit', $item->id) }}" title="Edit">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ route('Dashboard.admin.users.delete', $item->id) }}" method="POST" onsubmit="return confirm('Delete this user?')" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="icon-btn" title="Delete">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7">
                <div class="text-center py-4">
                  <div class="mb-1 fw-semibold">No users found</div>
                  <small class="text-muted">Try clearing the search or add a new user.</small>
                </div>
              </td>
            </tr>
          @endforelse
        </tbody>

        @if($users->hasPages())
          <tfoot>
            <tr>
              <td colspan="7" class="p-2">
                <div class="d-flex justify-content-end">
                  {{ $users->links() }}
                </div>
              </td>
            </tr>
          </tfoot>
        @endif
      </table>
    </div>
  </div>
</div>

@endsection
