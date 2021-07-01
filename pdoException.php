PDOException extends RuntimeException {
/* Propriétés */
public array $errorInfo;
protected string $code;
/* Propriétés héritées */
protected string $message;
protected int $code;
protected string $file;
protected int $line;
/* Méthodes héritées */
final public Exception::getMessage(): string
final public Exception::getPrevious(): Throwable|null
final public Exception::getCode(): int
final public Exception::getFile(): string
final public Exception::getLine(): int
final public Exception::getTrace(): array
final public Exception::getTraceAsString(): string
public Exception::__toString(): string
final private Exception::__clone(): void
}