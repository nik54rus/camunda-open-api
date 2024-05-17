# TaskQueryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** | Restrict to task with the given id. | [optional] 
**task_id_in** | **string[]** | Restrict to tasks with any of the given ids. | [optional] 
**process_instance_id** | **string** | Restrict to tasks that belong to process instances with the given id. | [optional] 
**process_instance_id_in** | **string[]** | Restrict to tasks that belong to process instances with the given ids. | [optional] 
**process_instance_business_key** | **string** | Restrict to tasks that belong to process instances with the given business key. | [optional] 
**process_instance_business_key_expression** | **string** | Restrict to tasks that belong to process instances with the given business key which  is described by an expression. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional] 
**process_instance_business_key_in** | **string[]** | Restrict to tasks that belong to process instances with one of the give business keys.  The keys need to be in a comma-separated list. | [optional] 
**process_instance_business_key_like** | **string** | Restrict to tasks that have a process instance business key that has the parameter  value as a substring. | [optional] 
**process_instance_business_key_like_expression** | **string** | Restrict to tasks that have a process instance business key that has the parameter  value as a substring and is described by an expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**process_definition_id** | **string** | Restrict to tasks that belong to a process definition with the given id. | [optional] 
**process_definition_key** | **string** | Restrict to tasks that belong to a process definition with the given key. | [optional] 
**process_definition_key_in** | **string[]** | Restrict to tasks that belong to a process definition with one of the given keys. The  keys need to be in a comma-separated list. | [optional] 
**process_definition_name** | **string** | Restrict to tasks that belong to a process definition with the given name. | [optional] 
**process_definition_name_like** | **string** | Restrict to tasks that have a process definition name that has the parameter value as  a substring. | [optional] 
**execution_id** | **string** | Restrict to tasks that belong to an execution with the given id. | [optional] 
**case_instance_id** | **string** | Restrict to tasks that belong to case instances with the given id. | [optional] 
**case_instance_business_key** | **string** | Restrict to tasks that belong to case instances with the given business key. | [optional] 
**case_instance_business_key_like** | **string** | Restrict to tasks that have a case instance business key that has the parameter value  as a substring. | [optional] 
**case_definition_id** | **string** | Restrict to tasks that belong to a case definition with the given id. | [optional] 
**case_definition_key** | **string** | Restrict to tasks that belong to a case definition with the given key. | [optional] 
**case_definition_name** | **string** | Restrict to tasks that belong to a case definition with the given name. | [optional] 
**case_definition_name_like** | **string** | Restrict to tasks that have a case definition name that has the parameter value as a  substring. | [optional] 
**case_execution_id** | **string** | Restrict to tasks that belong to a case execution with the given id. | [optional] 
**activity_instance_id_in** | **string[]** | Only include tasks which belong to one of the passed and comma-separated activity  instance ids. | [optional] 
**tenant_id_in** | **string[]** | Only include tasks which belong to one of the passed and comma-separated  tenant ids. | [optional] 
**without_tenant_id** | **bool** | Only include tasks which belong to no tenant. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**assignee** | **string** | Restrict to tasks that the given user is assigned to. | [optional] 
**assignee_expression** | **string** | Restrict to tasks that the user described by the given expression is assigned to. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**assignee_like** | **string** | Restrict to tasks that have an assignee that has the parameter  value as a substring. | [optional] 
**assignee_like_expression** | **string** | Restrict to tasks that have an assignee that has the parameter value described by the  given expression as a substring. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**assignee_in** | **string[]** | Only include tasks which are assigned to one of the passed and comma-separated user ids. | [optional] 
**assignee_not_in** | **string[]** | Only include tasks which are not assigned to one of the passed and comma-separated user ids. | [optional] 
**owner** | **string** | Restrict to tasks that the given user owns. | [optional] 
**owner_expression** | **string** | Restrict to tasks that the user described by the given expression owns. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**candidate_group** | **string** | Only include tasks that are offered to the given group. | [optional] 
**candidate_group_expression** | **string** | Only include tasks that are offered to the group described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**candidate_user** | **string** | Only include tasks that are offered to the given user or to one of his groups. | [optional] 
**candidate_user_expression** | **string** | Only include tasks that are offered to the user described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional] 
**include_assigned_tasks** | **bool** | Also include tasks that are assigned to users in candidate queries. Default is to only  include tasks that are not assigned to any user if you query by candidate user or group(s). | [optional] [default to false]
**involved_user** | **string** | Only include tasks that the given user is involved in. A user is involved in a task if  an identity link exists between task and user (e.g., the user is the assignee). | [optional] 
**involved_user_expression** | **string** | Only include tasks that the user described by the given expression is involved in. A user is involved in a task if an identity link exists between task and user (e.g., the user is the assignee). See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional] 
**assigned** | **bool** | If set to &#x60;true&#x60;, restricts the query to all tasks that are assigned. | [optional] [default to false]
**unassigned** | **bool** | If set to &#x60;true&#x60;, restricts the query to all tasks that are unassigned. | [optional] [default to false]
**task_definition_key** | **string** | Restrict to tasks that have the given key. | [optional] 
**task_definition_key_in** | **string[]** | Restrict to tasks that have one of the given keys. The keys need to be in a comma-separated list. | [optional] 
**task_definition_key_like** | **string** | Restrict to tasks that have a key that has the parameter value as a substring. | [optional] 
**name** | **string** | Restrict to tasks that have the given name. | [optional] 
**name_not_equal** | **string** | Restrict to tasks that do not have the given name. | [optional] 
**name_like** | **string** | Restrict to tasks that have a name with the given parameter value as substring. | [optional] 
**name_not_like** | **string** | Restrict to tasks that do not have a name with the given parameter value as substring. | [optional] 
**description** | **string** | Restrict to tasks that have the given description. | [optional] 
**description_like** | **string** | Restrict to tasks that have a description that has the parameter value as a substring. | [optional] 
**priority** | **int** | Restrict to tasks that have the given priority. | [optional] 
**max_priority** | **int** | Restrict to tasks that have a lower or equal priority. | [optional] 
**min_priority** | **int** | Restrict to tasks that have a higher or equal priority. | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional] 
**due_date_expression** | **string** | Restrict to tasks that are due on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**due_after** | [**\DateTime**](\DateTime.md) | Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.435+0200&#x60;. | [optional] 
**due_after_expression** | **string** | Restrict to tasks that are due after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**due_before** | [**\DateTime**](\DateTime.md) | Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.243+0200&#x60;. | [optional] 
**due_before_expression** | **string** | Restrict to tasks that are due before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**without_due_date** | **bool** | Only include tasks which have no due date. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**follow_up_date** | [**\DateTime**](\DateTime.md) | Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional] 
**follow_up_date_expression** | **string** | Restrict to tasks that have a followUp date on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**follow_up_after** | [**\DateTime**](\DateTime.md) | Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.542+0200&#x60;. | [optional] 
**follow_up_after_expression** | **string** | Restrict to tasks that have a followUp date after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**follow_up_before** | **string** | Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.234+0200&#x60;. | [optional] 
**follow_up_before_expression** | **string** | Restrict to tasks that have a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**follow_up_before_or_not_existent** | [**\DateTime**](\DateTime.md) | Restrict to tasks that have no followUp date or a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.432+0200&#x60;. The typical use case is to query all &#x60;active&#x60; tasks for a user for a given date. | [optional] 
**follow_up_before_or_not_existent_expression** | **string** | Restrict to tasks that have no followUp date or a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | Restrict to tasks that were created on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.324+0200&#x60;. | [optional] 
**created_on_expression** | **string** | Restrict to tasks that were created on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**created_after** | [**\DateTime**](\DateTime.md) | Restrict to tasks that were created after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional] 
**created_after_expression** | **string** | Restrict to tasks that were created after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**created_before** | [**\DateTime**](\DateTime.md) | Restrict to tasks that were created before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional] 
**created_before_expression** | **string** | Restrict to tasks that were created before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**updated_after** | [**\DateTime**](\DateTime.md) | Restrict to tasks that were updated after the given date. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional] 
**updated_after_expression** | **string** | Restrict to tasks that were updated after the date described by the given expression. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional] 
**delegation_state** | **string** | Restrict to tasks that are in the given delegation state. Valid values are &#x60;PENDING&#x60; and &#x60;RESOLVED&#x60;. | [optional] 
**candidate_groups** | **string[]** | Restrict to tasks that are offered to any of the given candidate groups. Takes a comma-separated list of group names, so for example &#x60;developers,support,sales&#x60;. | [optional] 
**candidate_groups_expression** | **string** | Restrict to tasks that are offered to any of the candidate groups described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to &#x60;java.util.List&#x60; of Strings. | [optional] 
**with_candidate_groups** | **bool** | Only include tasks which have a candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**without_candidate_groups** | **bool** | Only include tasks which have no candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**with_candidate_users** | **bool** | Only include tasks which have a candidate user. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**without_candidate_users** | **bool** | Only include tasks which have no candidate users. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**active** | **bool** | Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**suspended** | **bool** | Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
**task_variables** | [**\Swagger\Client\Model\VariableQueryParameterDto[]**](VariableQueryParameterDto.md) | A JSON array to only include tasks that have variables with certain values. The array consists of JSON objects with three properties &#x60;name&#x60;, &#x60;operator&#x60; and &#x60;value&#x60;. &#x60;name&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. &#x60;value&#x60; may be of type &#x60;String&#x60;, &#x60;Number&#x60; or &#x60;Boolean&#x60;.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional] 
**process_variables** | [**\Swagger\Client\Model\VariableQueryParameterDto[]**](VariableQueryParameterDto.md) | A JSON array to only include tasks that belong to a process instance with variables with certain values. The array consists of JSON objects with three properties &#x60;name&#x60;, &#x60;operator&#x60; and &#x60;value&#x60;. &#x60;name&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. &#x60;value&#x60; may be of type &#x60;String&#x60;, &#x60;Number&#x60; or &#x60;Boolean&#x60;.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;; &#x60;notLike&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional] 
**case_instance_variables** | [**\Swagger\Client\Model\VariableQueryParameterDto[]**](VariableQueryParameterDto.md) | A JSON array to only include tasks that belong to a case instance with variables with certain values. The array consists of JSON objects with three properties &#x60;name&#x60;, &#x60;operator&#x60; and &#x60;value&#x60;. &#x60;name&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. &#x60;value&#x60; may be of type &#x60;String&#x60;, &#x60;Number&#x60; or &#x60;Boolean&#x60;.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional] 
**variable_names_ignore_case** | **bool** | Match all variable names in this query case-insensitively. If set &#x60;variableName&#x60; and &#x60;variablename&#x60; are treated as equal. | [optional] [default to false]
**variable_values_ignore_case** | **bool** | Match all variable values in this query case-insensitively. If set &#x60;variableValue&#x60; and &#x60;variablevalue&#x60; are treated as equal. | [optional] [default to false]
**parent_task_id** | **string** | Restrict query to all tasks that are sub tasks of the given task. Takes a task id. | [optional] 
**or_queries** | [**\Swagger\Client\Model\TaskQueryDto[]**](TaskQueryDto.md) | A JSON array of nested task queries with OR semantics. A task matches a nested query if it fulfills *at least one* of the query&#x27;s predicates. With multiple nested queries, a task must fulfill at least one predicate of *each* query ([Conjunctive Normal Form](https://en.wikipedia.org/wiki/Conjunctive_normal_form)).  All task query properties can be used except for: &#x60;sorting&#x60;, &#x60;withCandidateGroups&#x60;, &#x60;withoutCandidateGroups&#x60;, &#x60;withCandidateUsers&#x60;, &#x60;withoutCandidateUsers&#x60;  See the [User guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-engine-api/#or-queries) for more information about OR queries. | [optional] 
**sorting** | [**\Swagger\Client\Model\TaskQueryDtoSorting[]**](TaskQueryDtoSorting.md) | Apply sorting of the result | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
