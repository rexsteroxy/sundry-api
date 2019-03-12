# sundry-api
API for Job Board

## Job Listing

| `Endpoint` | `api/listings` |      |
| :---------| :------------ | ----- |
| Request Type |  POST       |    
| Description  | Creates a new Job Listing |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| user_id     | ID of an existing user | YES         |
| title      | Text between 5 - 20 characters | YES         |
| description     | Text with minimum of 20 characters | YES |
| position     | Text with minimum of 3 characters | YES |
| requirements | Text with minimum of 10 characters    |    YES |
| location     | Text with minimum of 2 characters | YES         |

| `Endpoint` | `api/listings/` |      |
| :---------| :------------ | ----- |
| Request Type |  GET    |    
| Description  | Get all Job Listings |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| No fields  Required

| `Endpoint` | `api/listings/ID` |      |
| :---------| :------------ | ----- |
| Request Type |  GET    |    
| Description  | Get Job Listing Specified by ID |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| No fields  Required


| `Endpoint` | `api/listings/update/ID` |      |
| :---------| :------------ | ----- |
| Request Type |  PUT      |    
| Description  | Updates  an existing Job Listing |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| user_id     | ID of an existing user | YES         |
| title      | Text between 5 - 20 characters | YES         |
| description     | Text with minimum of 20 characters | YES |
| position     | Text with minimum of 3 characters | YES |
| requirements | Text with minimum of 10 characters    |    YES |
| location     | Text with minimum of 2 characters | YES         |

| `Endpoint` | `api/listings/close/ID` |      |
| :---------| :------------ | ----- |
| Request Type |  POST   |    
| Description  | Mark Job listing as closed |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| No fields  Required

| `Endpoint` | `api/listings/delete/ID` |      |
| :---------| :------------ | ----- |
| Request Type |  DELETE   |    
| Description  | Soft delete job listing |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| No fields  Required


