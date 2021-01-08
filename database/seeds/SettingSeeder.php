<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'table_name'=> 'companies',
                'setting'=> '"[{\n    \"componentDetails\":{\n        \"title\":\"Company List\",\n        \"editTitle\":\"Edit Company\"\n    },\n    \"routes\":{\n        \"create\":{\n            \"name\":\"superAdmin.companies.store\",\n            \"link\":\"super-admin\/companies\"\n        },\n        \"update\":{\n            \"name\":\"superAdmin.companies.update\",\n            \"link\":\"super-admin\/companies\"\n        },\n        \"delete\":{\n            \"name\":\"superAdmin.companies.destroy\",\n            \"link\":\"super-admin\/companies\"\n        }\n    },\n    \"fieldList\":[{\n        \n            \"position\":11,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"2\",\n            \"require\":\"1\",\n\n            \"name\":\"name\",\n            \"input_type\" : \"text\",\n            \"database_name\":\"name\",  \n            \"title\":\"Name\"\n        },\n        {\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"2\",\n            \"require\":\"1\",\n\n           \"input_type\":\"dropDown\",\n           \"name\":\"company_type\",\n           \"database_name\":\"company_type_id\",\n           \"title\": \"Company Type\",\n           \"data\" : \"company_types\"\n        },{\n            \n            \"position\":111,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"2\",\n            \"require\":\"0\",\n\n           \"input_type\":\"text\",\n           \"name\":\"description\",\n           \"title\":\"Description\",\n\n\n           \"database_name\":\"description\"\n        }\n    ]\n}]"',
            ],
            [
                'table_name'=> 'destinations',
                'setting'=> '"[{\n    \"componentDetails\":{\n        \"title\":\"Destination List\",\n        \"editTitle\":\"Edit Destination\"\n    },\n    \"routes\":{\n        \"create\":{\n            \"name\":\"superAdmin.destinations.store\",\n            \"link\":\"super-admin\/destinations\"\n        },\n        \"update\":{\n            \"name\":\"superAdmin.destinations.update\",\n            \"link\":\"super-admin\/destinations\"\n        },\n        \"delete\":{\n            \"name\":\"superAdmin.destinations.destroy\",\n            \"link\":\"super-admin\/destinations\"\n        }\n    },\n    \"fieldList\":[{\n        \n            \"position\":11,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"2\",\n            \"require\":\"1\",\n\n            \"name\":\"name\",\n            \"input_type\" : \"text\",\n            \"database_name\":\"name\",  \n            \"title\":\"Name\"\n        },{\n            \n            \"position\":111,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"2\",\n            \"require\":\"0\",\n\n           \"input_type\":\"text\",\n           \"name\":\"description\",\n           \"title\":\"Description\",\n\n\n           \"database_name\":\"description\"\n        }\n    ]\n}]"',
            ],
            [
                'table_name'=> 'buses',
                'setting'=> '"[{\r\n    \"componentDetails\":{\r\n        \"title\":\"Buses List\",\r\n        \"editTitle\":\"Edit Buses\"\r\n    },\r\n    \"routes\":{\r\n        \"create\":{\r\n            \"name\":\"bus.buses.store\",\r\n            \"link\":\"bus\/buses\"\r\n        },\r\n        \"update\":{\r\n            \"name\":\"bus.buses.update\",\r\n            \"link\":\"bus\/buses\"\r\n        },\r\n        \"delete\":{\r\n            \"name\":\"bus.buses.destroy\",\r\n            \"link\":\"bus\/buses\"\r\n        }\r\n    },\r\n    \"fieldList\":[{\r\n        \r\n            \"position\":11,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n            \"name\":\"bus_no\",\r\n            \"input_type\" : \"text\",\r\n            \"database_name\":\"bus_no\",  \r\n            \"title\":\"Bus No\"\r\n        },{\r\n            \r\n            \"position\":111,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n           \"input_type\":\"text\",\r\n           \"name\":\"total_seat\",\r\n           \"title\":\"Total Seat\",\r\n\r\n\r\n           \"database_name\":\"total_seat\"\r\n        },{\r\n            \r\n            \"position\":3,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n           \"input_type\":\"dropDown\",\r\n           \"name\":\"company_id\",\r\n           \"database_name\":\"company_id\",\r\n           \"title\": \"Company\",\r\n           \"data\" : \"Companies\"\r\n        }\r\n    ]\r\n}]"',
            ],
            [
                'table_name'=> 'bus_counters',
                'setting'=> '"[{\r\n    \"componentDetails\":{\r\n        \"title\":\"Counter List\",\r\n        \"editTitle\":\"Edit Counter\"\r\n    },\r\n    \"routes\":{\r\n        \"create\":{\r\n            \"name\":\"bus.bus-counters.store\",\r\n            \"link\":\"bus\/bus-counters\"\r\n        },\r\n        \"update\":{\r\n            \"name\":\"bus.bus-counters.update\",\r\n            \"link\":\"bus\/bus-counters\"\r\n        },\r\n        \"delete\":{\r\n            \"name\":\"bus.bus-counters.destroy\",\r\n            \"link\":\"bus\/bus-counters\"\r\n        }\r\n    },\r\n    \"fieldList\":[{\r\n            \r\n            \"position\":111,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n           \"input_type\":\"text\",\r\n           \"name\":\"name\",\r\n           \"title\":\"Name\",\r\n\r\n\r\n           \"database_name\":\"name\"\r\n        },{\r\n            \r\n            \"position\":112,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n           \"input_type\":\"dropDown\",\r\n           \"name\":\"company\",\r\n           \"database_name\":\"company_id\",\r\n           \"title\": \"Company\",\r\n           \"data\" : \"Companies\"\r\n        },{\r\n            \r\n            \"position\":115,\r\n\r\n            \"create\":\"1\",\r\n            \"read\":\"1\",\r\n            \"update\":\"1\",\r\n            \"require\":\"1\",\r\n\r\n           \"input_type\":\"dropDown\",\r\n           \"name\":\"destination\",\r\n           \"database_name\":\"destination_id\",\r\n           \"title\": \"Destnation\",\r\n           \"data\" : \"destination\"\r\n        }\r\n    ]\r\n}]"',
            ],
            
            
        ]);
    }
}
