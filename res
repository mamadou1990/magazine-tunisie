   "/magazine-tunisie/public/section": {
            "post": {
                "tags": [
                    "section"
                ],
                "summary": "Add a new sssection to the store",
                "description": "",
                "operationId": "Section",
                "consumes": [
                    "application/json",
                    "application/xml"
                ],
                "produces": [
                    "application/json",
                    "application/xml"
                ],
                "parameters": [
                    {
                        "in": "body",
                        "name": "section",
                        "description": "section object that needs to be added to the store",
                        "required": true,
                        "schema": {
                            "type": "object",
                            "$ref": "#/definitions/Section"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "pet response",
                        "schema": {
                            "type": "object",
                            "$ref": "#/definitions/Section"
                        }
                    },
                    "405": {
                        "description": "Invalid input"
                    }
                },
                "security": [
                    {
                        "petstore_auth": [
                            "write:pets",
                            "read:pets"
                        ]
                    }
                ]
            }
        },