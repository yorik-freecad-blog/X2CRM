<?php
/*****************************************************************************************
 * X2Engine Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2015 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/


return array (
// Menu Text
'Manage Flows'=>'Управление потоками',
'Create Flow'=>'Создание потока',
'X2Flow Automation Rules'=>'Правила X2Flow Автоматизация',

// Flow Editor Text
'changed'=>'изменились',
'before'=>'до',
'after'=>'после',
'Compare Attribute'=>'Сравнение атрибутов',
'Current User'=>'Текущий пользователь',
'Current Month'=>'Текущий месяц',
'Day of Week'=>'День недели',
'Day of Month'=>'День месяца',
'Time of Day'=>'Время дня',
'Current Time'=>'Текущее время',
'User Logged In'=>'Пользователь вошел в систему',
'On List'=>'О перечне',
'Add Condition'=>'Добавить условие',
'Add Attribute'=>'Добавить атрибут',

// Trigger Types
'Select a trigger'=>'Выбирают триггер',
'Action Overdue'=>'Действие Просроченная',
'Action Marked Incomplete'=>'Действие отмеченной как неполная',
'Campaign Email Clicked'=>'Нажал кампании по электронной почте',
'Campaign Email Opened'=>'Открыт кампании электронной почты',
'Unsubscribed from Campaign'=>'Отписались от кампании',
'Campaign Web Activity'=>'Активность кампании веб-',
'Newsletter Email Clicked'=>'Электронный бюллетень Нажал',
'Newsletter Email Opened'=>'Открыт электронный бюллетень',
'Unsubscribed from Newsletter'=>'Отказались от подписки на новости',
'Tag Added'=>'Добавлен тег',
'Tag Removed'=>'Удалить метку',
'Record Updated'=>'Запишите Обновлено',
'Record Viewed'=>'Запись Просмотров',
'User Signed In'=>'Пользователь вошел в систему',
'User Signed Out'=>'Пользователь выписался',
'Contact Web Activity'=>'Написать веб-активности',

// Trigger Text
'Triggers when an action becomes overdue. Cronjob must be configured to trigger reliably.'=>'Срабатывает, когда действие становится просроченным. Cronjob должен быть настроен, чтобы вызвать надежно.',
'Time Overdue (s)'=>'Время Просроченные (ы)',
'Triggers when a contact clicks a tracking link in a campaign email.'=>'Срабатывает при контакте нажимает ссылке отслеживания в кампании по электронной почте.',
'Triggers when a contact opens or clicks on a tracking link in a campaign email.'=>'Срабатывает, когда контакт размыкается или кликов по ссылке отслеживания в кампании по электронной почте.',
'Triggers when a contact clicks the "unsubscribe" link in a campaign email.'=>'Срабатывает при контакте нажимает кнопку "отписаться" звено в кампании по электронной почте.',
'Triggered when a contact visits your webpage by clicking a link in a campaign email.'=>'Срабатывает при контакте посещает ваш веб-страницу, нажав на ссылку в кампании по электронной почте.',
'Triggers when a contact clicks a tracking link in a newsletter email (no contact record available).'=>'Срабатывает при контакте нажимает ссылке отслеживания в рассылку электронной почты (без записи контакта доступно).',
'Triggers when a contact opens or clicks on a tracking link in a newsletter email (no contact record available).'=>'Срабатывает, когда контакт размыкается или кликов по ссылке отслеживания в рассылку электронной почты (без записи контакта доступно).',
'Triggers when a contact clicks the "unsubscribe" link in a newsletter email (no contact record available).'=>'Срабатывает при контакте нажимает кнопку "Отказаться от подписки" ссылку в рассылку электронной почты (без записи контакта доступно).',
'Triggered when a contact visits a webpage (no contact record available).'=>'Срабатывает при контакте посещает веб-страницы (без записи контакта доступно).',
'Triggers when a new record of the specified type is created.'=>'Срабатывает, когда новая запись указанного типа будет создан.',
'Triggers when a record of specified type is deleted.'=>'Триггеры, когда запись указанного типа будет удалена.',
'Triggered by adding one of these tags to a record.'=>'Срабатывает, добавив одну из этих тегов до рекордной.',
'Triggered when some updates a record of the the specified type.'=>'Срабатывает, когда некоторые обновления записи указанного типа.',
'Triggered when a user signs in to X2Engine.'=>'Срабатывает, когда пользователь знаки и X2Engine.',
'Triggered when a user signs out of X2Engine.'=>'Срабатывает, когда пользователь подписывает из X2Engine.',
'Triggered when a contact visits a webpage'=>'Срабатывает при контакте посещает веб-страницу',
'Triggers when a new contact fills out your web lead capture form.'=>'Срабатывает, когда новый контакт заполняет ваш веб привести захват формы.',

// Action Types
'Flow Actions'=>'Поток Действия',
'Remote API Call'=>'Удаленный вызов API',
'Post to Activity Feed'=>'Опубликовать Лента',
'Create Popup Notification'=>'Создайте всплывающее уведомление',
'Create Record'=>'Создать запись',
'Create Action for Record'=>'Создать действие для записи',
'Delete Record'=>'Удалить запись',
'Email Record'=>'Запись по электронной почте',
'Email Contact'=>'Контактный адрес электронной почты',
'Add to List'=>'Добавить к списку',
'Remove from List'=>'Удалить из списка',
'Reassign Record'=>'Переназначение Record',
'Add or Remove Tags'=>'Добавить или удалить теги',
'Update Record'=>'Обновить запись',
'Wait'=>'Ждать',

// Action Text
'Conditional Switch'=>'Условный ключ',
'Creates a fork in the automation flow based on your conditions.'=>'Создает вилкой в ​​автоматизации потока в зависимости от состояния.',
'Call a remote API by requesting the specified URL. You can specify the request type and any variables to be passed with the request. To improve performance, he request will be put into a job queue unless you need it to execute immediately.'=>'Вызвать удаленный API, запрашивая указанный URL. Вы можете указать тип запроса и любые переменные, которые будут переданы в запросе. Чтобы повысить производительность, он просить будет введен в очереди заданий, если вам это нужно выполнить немедленно.',
'GET'=>'GET',
'POST'=>'POST',
'PUT'=>'PUT',
'DELETE'=>'DELETE',
'Creates an activity feed event.'=>'Создает событие Лента.',
'Owner of Record'=>'Официальный собственник',
'{Owner of Record}'=>'{Owner of Record}',
'Send a template or custom email to the specified address.'=>'Отправить или пользовательского шаблона электронной почте на указанный адрес.',
'Creates a new action associated with the record that triggered this flow.'=>'Создает новое действие, связанное с записью, который вызвал этот поток.',
'Permanently delete this record.'=>'Постоянно удалить эту запись.',
'Send a template or custom email to this record\'s email address. Uses the assignee\'s email unless specified.'=>'Отправить или пользовательского шаблона электронной почте на эту запись  &#39;ы адрес электронной почты. Использует правопреемником  &#39;ы электронной почте, если не указано.',
'Add this record to a static list.'=>'Добавить эту запись в статический список.',
'Remove this record from a static list.'=>'Удалить эту запись из статического списка.',
'Assign the record to a user or group, or automatically using lead routing.'=>'Назначьте записи пользователя или группы, или автоматически с помощью ведущего маршрутизации.',
'Use Lead Routing'=>'Используется свинец маршрутизации',
'Enter a commna-separated list of tags to add to the record'=>'Введите commna список разделенных добавить теги к записи',
'Change one or more fields on an existing record.'=>'Изменение одного или нескольких полей на существующей записи.',
'Delay execution of the remaining steps until the specified time.'=>'Задержка выполнения оставшихся шагов до указанного времени.',
'hours'=>'часов',
'days'=>'дней',
'months'=>'месяцев',
'Current Timestamp'=>'Текущего времени',
'Flow configuration data appears to be corrupt.'=>'Данные конфигурации расхода является коррумпированных.',
'You must configure a trigger event.'=>'Необходимо настроить триггера.',
'There must be at least one action in the flow.'=>'Там должно быть по крайней мере одно действие в потоке.',
'Duration (s)'=>'Продолжительность (сек)',
'Create New Flow'=>'Создайте новый поток',
'Message'=>'Сообщение',
'For'=>'Для',
'Post Type'=>'Сообщение типа',
'Create Notification?'=>'Создать уведомление?',
'User Active?'=>'Пользователь активность?',
'seconds (recommended for formulas only)'=>'секунд (рекомендуется для формулы только)',
'To:'=>'To:',
'From:'=>'От:',
'CC:'=>'CC:',
'BCC:'=>'BCC:',
'Tags (optional)'=>'Тэги (опционально)',
'All Trigger Logs'=>'Все журналы триггера',
'Trigger: '=>'Trigger:',
'Execute Branch: '=>'Выполнить Отрасль:',
'Trigger Log'=>'Триггера входа',
'Are you sure you want to delete all trigger logs?'=>'Вы уверены, что хотите удалить все журналы запуска?',
'Are you sure you want to permanently delete all trigger logs?'=>'Вы уверены, что хотите удалить все журналы запуска?',
'Triggered At'=>'Привели в',
'Log Output'=>'Войти выход',
'View Log Output'=>'Просмотр журнала Выход',
'Flow Name'=>'Расход Имя',
'Flow Trigger Logs'=>'Поток триггер Журналы',
'Cron Action Succeeded'=>'Крон Действие Преемник',
'Cron Action Failed'=>'Крон Ошибка действий',
'Viewing log file {file}'=>'Просмотр файла журнала {file}',
'Show Trigger Logs'=>'Показать Trigger Журналы',
'View Cron Log'=>'Посмотреть Крон Вход',
'Test Cron'=>'Тест Крон',
'Toggle Node Labels'=>'Переключение узлов Этикетки',
'Required flow item input missing'=>'Требуемый параметр входной поток отсутствует',
'View created record: '=>'Посмотреть создана запись:',
'View created action: '=>'Посмотреть создан действия:',
'Flow item configuration error: No attributes added'=>'Расход ошибку конфигурации пункт: Атрибуты не добавил',
'View updated record: '=>'Просмотр обновленную запись:',
'User '=>'Пользователь',
'Default Web Content'=>'Web Content умолчанию',
'conditions not passed'=>'условия не прошел',
'Flow configuration data appears to be '=>'Появляется данные конфигурации потока, чтобы быть',
'There must be at least one action in the '=>'Там должно быть по крайней мере одно действие в',
'View record: '=>'Посмотреть запись:',
'Export Flow'=>'Экспорт потока',
'Please click the button below to begin the export. Do not close this page until the export is finished.'=>'Пожалуйста, нажмите на кнопку ниже, чтобы начать экспорт. Не закрывайте эту страницу, пока экспорт не будет завершен.',
'You are currently exporting '=>'Вы в настоящее время экспорт',
'Please click the link below to download the exported flow.'=>'Пожалуйста, нажмите на ссылку, чтобы скачать экспортированный поток.',
'Upload a flow that has been exported using the X2Flow export tool.'=>'Загрузить поток, который был экспортирован с помощью экспортного инструмент X2Flow.',
'Processes are not associated with records of this type'=>'Процессы, не связанные с записями этого типа',
'{recordName} are not associated with processes'=>'{recordName} не связаны с процессами',
'hour'=>'час',
'Stage "{stageName}" started for {recordName}'=>'Стадия &quot; {stageName} &quot;начался для {recordName}',
'Lead routing rules cannot be used with {type} records'=>'Свинцовые правила маршрутизации не могут быть использованы с {type} записей',
'Stage "{stageName}" reverted for {recordName}'=>'Стадия &quot; {stageName} &quot;вернулся на {recordName}',
'Stage Comment'=>'Стадия комментарий',
'Stage "{stageName}" completed for {recordName}'=>'Стадия &quot; {stageName} &quot;завершены {recordName}',
'Associated Record Type'=>'Связанное Тип записи',
'the following condition did not pass: '=>'следующее условие не прошел:',
'a required parameter is missing'=>'отсутствует обязательный параметр',
'No tags on the record matched those in the tag trigger criteria.'=>'Нет тегов по записи, соответствующие тем, в критериях запуска тегов.',
'No tags in the trigger criteria!'=>'Нет тегов в критериях запуска!',
'Tags parameter missing!'=>'Теги параметр отсутствует!',
'Match Probability'=>'Матч Вероятность',
'Invalid file type'=>'Неверный тип файла',
'Invalid file contents'=>'Недействительные содержимое файла',
);
