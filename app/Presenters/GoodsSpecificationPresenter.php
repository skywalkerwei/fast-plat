<?php

namespace App\Presenters;

use App\Transformers\GoodsSpecificationTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class GoodsSpecificationPresenter.
 *
 * @package namespace App\Presenters;
 */
class GoodsSpecificationPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new GoodsSpecificationTransformer();
    }
}
