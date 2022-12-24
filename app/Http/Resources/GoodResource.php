<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id, // Первичный 	bigint(20) 		UNSIGNED 	Нет 	Нет 		AUTO_INCREMENT 	Изменить Изменить 	Удалить Удалить 	
            'naimenovanie' => $this->naimenovanie, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'dobavka' => $this->dobavka, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'organizaciya' => $this->organizaciya, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'sait' => $this->sait, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'saitsdelal' => $this->saitsdelal, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'foto' => $this->foto, //	varchar(250) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'edizm' => $this->edizm, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'srokgod' => $this->srokgod, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'kodt' => $this->kodt, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            // 'kolicestvo' => $this->kolicestvo, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'kolicestvo' => ceil($this->kolicestvo), //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'zakaz' => $this->zakaz, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'upakovok' => $this->upakovok, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'upakovkazakaz' => $this->upakovkazakaz, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            // 'cena1or' => $this->cena1, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'cena1' => self::toNormNum($this->cena1), //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            // 'cena2or' => $this->cena2, //varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'cena2' => self::toNormNum($this->cena2), //varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            // 'cena3or' => $this->cena3, //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'cena3' => self::toNormNum($this->cena3), //	varchar(255) 	utf8mb4_unicode_ci 		Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'created_at ' => $this->created_at, //	timestamp 			Да 	NULL 			Изменить Изменить 	Удалить Удалить 	
            'updated_at' => $this->updated_at, //	timestamp 			Да 	NULL
        ];
    }

    public static function toNormNum($str)
    {
        return round(str_replace(',', '.', preg_replace("/[^,.0-9]/", '', $str)), 2);
    }
    
}
