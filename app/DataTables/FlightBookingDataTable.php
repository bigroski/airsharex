<?php

namespace App\DataTables;

use App\Models\FlightBooking;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Bigroski\Tukicms\App\Traits\Tuples;

class FlightBookingDataTable extends DataTable
{
    use Tuples;

    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $eloquent = (new EloquentDataTable($query));
        $this->renderColumnTypes($eloquent);
        $this->makeActionColumns($eloquent);
        $eloquent->editColumn('created_at', function($model){
            return $model->created_at->toDayDateTimeString();
        });
        return $eloquent;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\FlightBooking $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(FlightBooking $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('flightBooking-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    // ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        $columns = $this->makeColumns();
        return $this->makeColumns();
        
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'flightBooking_' . date('YmdHis');
    }
}
