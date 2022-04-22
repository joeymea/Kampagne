# Characters

---

- [Characters](#characters)
  - [All Characters](#all-characters)
    - [Results](#results)
  - [Character](#character)
    - [Results](#results-1)
  - [Create a Character](#create-a-character)
    - [Body](#body)
    - [Results](#results-2)
  - [Update a Character](#update-a-character)
    - [Body](#body-1)
    - [Results](#results-3)
  - [Delete a Character](#delete-a-character)
    - [Results](#results-4)

<a name="all-characters"></a>
## All Characters

You can get a list of all the characters of a campaign by using the following endpoint.

> {warning} Don't forget that all endpoints documented here need to be prefixed with `api/{{version}}/campaigns/{campaign.id}/`.


| Method | URI | Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `characters` | Default |

### URL Parameters

The list of returned characters can be filtered. The available filters are available here: <a href="/en/helpers/api-filters?type=character" target="_blank">API filters</a>.


### Results

```json
{
    "data": [
        {
            "id": 1,
            "name": "Jonathan Green",
            "entry": "\n<p>Lorem Ipsum.</p>\n",
            "image": "{path}",
            "image_full": "{url}",
            "image_thumb": "{url}",
            "has_custom_image": false,
            "is_private": true,
            "is_personality_visible": true,
            "is_template": false,
            "entity_id": 4,
            "tags": [],
            "created_at": "2019-01-29T16:40:34.000000Z",
            "created_by": 1,
            "updated_at": "2019-08-29T13:38:46.000000Z",
            "updated_by": 1,
            "location_id": 4,
            "title": null,
            "age": "39",
            "sex": "Male",
            "pronouns": null,
            "races": [3],
            "type": null,
            "families": [34],
            "is_dead": true,
            "traits": [
                {
                    "id": 33,
                    "name": "Goals",
                    "entry": "Become a Paladin.",
                    "section": "personality",
                    "section_id": 1,
                    "default_order": 0
                }
            ]
        }
    ]
}
```


<a name="character"></a>
## Character

To get the details of a single character, use the following endpoint.


| Method | URI | Headers |
| :- |   :-   |  :-  |
| GET/HEAD | `characters/{character.id}` | Default |

### Results
```json
{
    "data": {
        "id": 1,
        "name": "Jonathan Green",
        "entry": "\n<p>Lorem Ipsum.</p>\n",
        "image": "{path}",
        "image_full": "{url}",
        "image_thumb": "{url}",
        "has_custom_image": false,
        "is_private": true,
        "is_personality_visible": true,
        "is_template": false,
        "entity_id": 4,
        "tags": [],
        "created_at": "2019-01-29T16:40:34.000000Z",
        "created_by": 1,
        "updated_at": "2019-08-29T13:38:46.000000Z",
        "updated_by": 1,
        "location_id": 4,
        "title": null,
        "age": "39",
        "sex": "Male",
        "pronouns": null,
        "races": [3],
        "type": null,
        "family_id": 34,
        "families": [34],
        "is_dead": true,
        "traits": [
            {
                "id": 33,
                "name": "Goals",
                "entry": "Become a Paladin.",
                "section": "personality",
                "section_id": 1,
                "is_private": false,
                "default_order": 0
            }
        ]
    }

}
```



<a name="create-character"></a>
## Create a Character

To create a character, use the following endpoint.

| Method | URI | Headers |
| :- |   :-   |  :-  |
| POST | `characters` | Default |

### Body

| Parameter | Type | Detail |
| :- |   :-   |  :-  |
| `name` | `string` (Required) | Name of the character |
| `entry` | `string` | The html description of the character. |
| `title` | `string`  | Title of the character |
| `age` | `string`  | Age of the character |
| `sex` | `string`  | Gender of the character |
| `pronouns` | `string`  | Prefered pronouns of the character |
| `type` | `string`  | Type of the character |
| `families` | `array` | Array of family id |
| `location_id` | `integer` | Location id |
| `races` | `array` | Array of race ids |
| `tags` | `array` | Array of tag ids |
| `is_dead` | `boolean` | If the character is dead |
| `is_private` | `boolean` | If the character is only visible to `admin` members of the campaign |
| `image_url` | `string` | URL to a picture to be used for the character |
| `entity_image_uuid` | `string` | Gallery image UUID for the entity image (limited to superboosted campaigns) |
| `entity_header_uuid` | `string` | Gallery image UUID for the entity header (limited to superboosted campaigns) |
| `personality_name` | `array` | An array representing the name of personality traits. For example ```["Goals", "Fears"]```  |
| `personality_entry` | `array` | An array representing the values of personality traits. For example ```["To become a King", "Quiet places"]```  |
| `appearance_name` | `array` | An array representing the name of appearance traits. For example ```["Hair", "Eyes"]```  |
| `appearance_entry` | `array` | An array representing the values of appearance traits. For example ```["Curly black", "Light Green"]```  |
| `is_personality_visible` | `bool` | If the personality traits should be visible to all (true) or just admins (false) |

### Results

> {success} Code 200 with JSON body of the new character.


<a name="update-character"></a>
## Update a Character

To update a character, use the following endpoint.

| Method | URI | Headers |
| :- |   :-   |  :-  |
| PUT/PATCH | `characters/{character.id}` | Default |

### Body

The same body parameters are available as for when creating a character.

### Results

> {success} Code 200 with JSON body of the updated character.


<a name="delete-character"></a>
## Delete a Character

To delete a character, use the following endpoint.

| Method | URI | Headers |
| :- |   :-   |  :-  |
| DELETE | `characters/{character.id}` | Default |

### Results

> {success} Code 200 with JSON.
