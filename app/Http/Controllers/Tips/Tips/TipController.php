<?php


namespace App\Http\Controllers\Tips\Tips;

use App\Http\Controllers\Controller;
use App\Domain\Tips\Tips\Model\Tip;
use App\Domain\Tips\Tips\Actions\StoreTipAction;
use App\Domain\Tips\Tips\Actions\DestroyTipAction;
use App\Domain\Tips\Tips\Actions\UpdateTipAction;
use App\Domain\Tips\Tips\DTO\TipDTO;
use App\Http\Requests\Tips\Tips\StoreTipRequest;
use App\Http\Requests\Tips\Tips\UpdateTipRequest;
use App\Http\ViewModels\Tips\Tips\GetTipVM;
use App\Http\ViewModels\Tips\Tips\GetAllTipsVM;

class TipController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllTipsVM())->toArray()));
    }

    public function show(Tip $tip){

        return response()->json(success((new GetTipVM($tip))->toArray()));
    }

    public function store(StoreTipRequest $request){

        $data = $request->validated() ;

        $tipDTO = TipDTO::fromRequest($data);

        $tip = StoreTipAction::execute($tipDTO);

        return response()->json(success((new GetTipVM($tip))->toArray()));
    }

    public function update(Tip $tip, UpdateTipRequest $request){

        $data = $request->validated() ;

        $tipDTO = TipDTO::fromRequest($data);

        $tip = UpdateTipAction::execute($tip, $tipDTO);

        return response()->json(success((new GetTipVM($tip))->toArray()));
    }

    public function destroy(Tip $tip){

        return response()->json(success(DestroyTipAction::execute($tip)));
    }

}
