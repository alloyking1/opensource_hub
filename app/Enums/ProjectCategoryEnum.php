<?php

namespace App\Enums;

use App\Models\Category;

enum ProjectCategoryEnum: string
{

        //inject db category to enum
    case PROJECTS = 'project';
    case TOOLS = 'tools';
    case PACKAGES = 'packages';

    // protected static function categoryQuery(){

    // }
}
