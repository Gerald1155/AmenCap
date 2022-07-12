<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MultiAsset;
class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
            "token",
            "buy_date",
            "buy_price",
            "holdings",
            "amount_usd",
            "sell_date",
            "sell_price",
            "profit_loss_number",
            "profit_loss_percentage"
    ];

    public function hasMulti()
    {
        if (count(MultiAsset::where("token",$this->token)->get()) > 0) {
            return MultiAsset::where("token",$this->token)->first();
        }
    }

    public function fee()
    {
        return $this->HasOne("App\Models\Fee");
    }
   
}
