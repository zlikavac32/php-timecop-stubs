<?php

/**
 * Freeze the concept of now to the given timestamp or {@link DateTimeInterface} instance. Unlike with
 * {@link timecop_travel()}, time is here frozen until the call to any of
 *
 * <ul>
 *  <li>{@link timecop_travel()}</li>
 *  <li>{@link timecop_freeze()}</li>
 *  <li>{@link timecop_scale()}</li>
 *  <li>{@link timecop_return()}</li>
 * </ul>
 *
 * is made. Every call to {@link time()} and similar will return that point in time.
 *
 * @param int|DateTimeInterface $timeStamp New concept of now
 *
 * @return bool Returns <code>true</code> if <code>now</code> is frozen and <code>false</code> if argument is not valid
 */
function timecop_freeze($timeStamp) { }

/**
 * Move the concept of now to the given timestamp or {@link DateTimeInterface} instance. Unlike with
 * {@link timecop_freeze()}, time here still passes, but in respect to the new concept of now. For example, if we
 * traveled to "2017-08-28 00:00:00" and two seconds have passed until call to {@link time()} is made, then that call
 * would return timestamp of "2017-08-28 00:00:02". Concept of now is active until the call to any of
 *
 * <ul>
 *  <li>{@link timecop_travel()}</li>
 *  <li>{@link timecop_freeze()}</li>
 *  <li>{@link timecop_scale()}</li>
 *  <li>{@link timecop_return()}</li>
 * </ul>
 *
 * is made.
 *
 * @param int|DateTimeInterface $timeStamp New concept of now
 *
 * @return bool Returns <code>true</code> if <code>now</code> is moved and <code>false</code> if argument is not valid
 */
function timecop_travel($timeStamp) { }

/**
 * Makes time move at an accelerated pace to emulate long time spans.
 *
 * <pre></code>
 * timecop_freeze(new DateTime('2017-08-28'));
 * timecop_scale(50); //50x faster
 * usleep(100000); //100ms
 * var_dump((new DateTime())->format('c')); // string(25) "2017-08-28T00:00:05+00:00"
 * </code></pre>
 *
 * @param int $scale Scale factor
 *
 * @return bool Returns <code>false</code> if scale is not an integer or it's less than zero and <code>true</code> if
 * scale is set
 */
function timecop_scale($scale) { }

/**
 * Restore the concept of now to original PHP concept of now
 *
 * @return bool Returns <code>true</code>
 */
function timecop_return() { }

/**
 * @see time()
 *
 * @return int
 */
function timecop_time() { }

/**
 * @param int $hour
 * @param int $minute
 * @param int $second
 * @param int $month
 * @param int $day
 * @param int $year
 * @param int $isDst
 *
 * @see mktime()
 *
 * @return int
 */
function timecop_mktime($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $isDst = null) { }

/**
 * @param int $hour
 * @param int $minute
 * @param int $second
 * @param int $month
 * @param int $day
 * @param int $year
 * @param int $isDst
 *
 * @see gmmktime()
 *
 * @return int
 */
function timecop_gmmktime($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $isDst = null) { }

/**
 * @param string $format
 * @param int $timeStamp
 *
 * @see date()
 *
 * @return string
 */
function timecop_date($format, $timeStamp = null) { }

/**
 * @param string $format
 * @param int $timeStamp
 *
 * @see gmdate()
 *
 * @return string
 */
function timecop_gmdate($format, $timeStamp = null) { }

/**
 * @param string $format
 * @param int $timeStamp
 *
 * @see idate()
 *
 * @return int
 */
function timecop_idate($format, $timeStamp = null) { }

/**
 * @param int $timeStamp
 *
 * @see getdate()
 *
 * @return array
 */
function timecop_getdate($timeStamp = null) { }

/**
 * @param int $timeStamp
 * @param bool $associativeArray
 *
 * @see localtime()
 *
 * @return array
 */
function timecop_localtime($timeStamp = null, $associativeArray = false) { }

/**
 * @param string $time
 * @param int $now
 *
 * @see strtotime()
 *
 * @return int
 */
function timecop_strtotime($time, $now = null) { }

/**
 * @param string $format
 * @param int $timeStamp
 *
 * @see strftime()
 *
 * @return string
 */
function timecop_strftime($format, $timeStamp = null) { }

/**
 * @param string $format
 * @param int $timeStamp
 *
 * @see gmstrftime()
 *
 * @return string
 */
function timecop_gmstrftime($format, $timeStamp = null) { }

/**
 * @param bool $getAsFloat
 *
 * @see microtime()
 *
 * @return array|string
 */
function timecop_microtime($getAsFloat = false) { }

/**
 * @param bool $getAsFloat
 *
 * @see gettimeofday()
 *
 * @return array|float
 */
function timecop_gettimeofday($getAsFloat = false) { }

/**
 * @param int $timeStamp
 *
 * @see unixtojd()
 *
 * @return int
 */
function timecop_unixtojd($timeStamp = null) { }

/**
 * @param string $time
 * @param DateTimeZone|null $timeZone
 *
 * @see date_create()
 *
 * @return DateTime
 */
function timecop_date_create($time, DateTimeZone $timeZone = null) { }

/**
 * @param string $format
 * @param string $time
 * @param DateTimeZone|null $timeZone
 *
 * @see date_create_from_format()
 *
 * @return DateTime
 */
function timecop_date_create_from_format($format, $time, DateTimeZone $timeZone = null) { }

/**
 * @param string $time
 * @param DateTimeZone|null $timeZone
 *
 * @see date_create_immutable()
 *
 * @return DateTimeImmutable
 */
function timecop_date_create_immutable($time, DateTimeZone $timeZone = null) { }

/**
 * @param string $format
 * @param string $time
 * @param DateTimeZone|null $timeZone
 *
 * @see date_create_immutable_from_format()
 *
 * @return DateTimeImmutable
 */
function timecop_date_create_immutable_from_format($format, $time, DateTimeZone $timeZone = null) { }
