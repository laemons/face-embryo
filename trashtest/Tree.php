<?php
    
class Tree {
    /**
     *
     */
    // TODO TYPE + COMMENT + ENTITY SI BESOIN
    protected $id;
    /**
     *
     */
    // TODO TYPE + COMMENT + ENTITY SI BESOIN
    protected $age;
    /**
     *
     */
    // TODO TYPE + COMMENT + ENTITY SI BESOIN
    protected $Leaf;
    /**
     *
     */
    // TODO TYPE + COMMENT + ENTITY SI BESOIN
    protected $Lemon;
    
    
        
    use \Face\Traits\EntityFaceTrait;
    
    public static function __getEntityFace() {
    
        return [
            "sqlTable"=>"tree",
            
            "elements"=>[            

                "id"=>[
                    "identifier"=>true,
                    "sql"=>[
                        "isPrimary" => true,
                    ],
                ],
                

                "age"=>[
                    "identifier"=>false,
                    "sql"=>[
                        "isPrimary" => false,
                    ],
                ],
                
                "Leaf"=>[
                    "property"=>"Leaf",
                    "class"=>"Leaf",
                    "relation"=>"hasMany",
                    "relatedBy"=>"Tree",
                    "sql"=>[
                    "join" => ["id"=>"tree_id"]
                    ],
                ],
                
                "Lemon"=>[
                    "property"=>"Lemon",
                    "class"=>"Lemon",
                    "relation"=>"hasMany",
                    "relatedBy"=>"Tree",
                    "sql"=>[
                    "join" => ["id"=>"tree_id"]
                    ],
                ],
                
                
                
            ]
        ];
    
    }

}