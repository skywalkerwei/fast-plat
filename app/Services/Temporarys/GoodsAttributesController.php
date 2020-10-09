<?php

namespace App\Services\Temporarys;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\GoodsAttributeCreateRequest;
use App\Http\Requests\GoodsAttributeUpdateRequest;
use App\Repository\Interfaces\GoodsAttributeRepository;
use App\Http\Requests\GoodsAttributeValidator;

/**
 * Class GoodsAttributesController.
 *
 * @package namespace App\Repository\Controllers;
 */
class GoodsAttributesController
{
    /**
     * @var GoodsAttributeRepository
     */
    protected $repository;

    /**
     * @var GoodsAttributeValidator
     */
    protected $validator;

    /**
     * GoodsAttributesController constructor.
     *
     * @param GoodsAttributeRepository $repository
     * @param GoodsAttributeValidator $validator
     */
    public function __construct(GoodsAttributeRepository $repository, GoodsAttributeValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $goodsAttributes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $goodsAttributes,
            ]);
        }

        return view('goodsAttributes.index', compact('goodsAttributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GoodsAttributeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(GoodsAttributeCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $goodsAttribute = $this->repository->create($request->all());

            $response = [
                'message' => 'GoodsAttribute created.',
                'data'    => $goodsAttribute->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goodsAttribute = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $goodsAttribute,
            ]);
        }

        return view('goodsAttributes.show', compact('goodsAttribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goodsAttribute = $this->repository->find($id);

        return view('goodsAttributes.edit', compact('goodsAttribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  GoodsAttributeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(GoodsAttributeUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $goodsAttribute = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'GoodsAttribute updated.',
                'data'    => $goodsAttribute->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'GoodsAttribute deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'GoodsAttribute deleted.');
    }
}
